<?php
    include 'includes/header.php';
    require('includes/config.php');

    if(isset($_POST['submit'])){
        session_start();
        $message="";
        if(isset($_POST["email"]) && isset($_POST["password"])){
            unset($_SESSION["id"]);
            $result = mysqli_query($conn,"SELECT * FROM employee WHERE  email_employee='" . $_POST["email"] . "' AND password_employee = '". $_POST["password"]."'");
            $num = mysqli_num_rows($result);
            if(!empty($num)){
                $row  = mysqli_fetch_array($result);
                $_SESSION["id"] = $row[0];
            }else {
              echo  $message = "Invalid Username or Password!";
            }
        }
        if(isset($_SESSION["id"])) {
            $query="SELECT name FROM employee";
            $result= mysqli_query($conn,$query);
            $user= mysqli_fetch_assoc($result);
        header("Location:employee.php");
        }
    }
?>
<div width="100%" hight="100%" id="bg-employee-login" >  
    <div class="col-3 login-card">
        <div class="container1">
            <div align="center"><img src="images/logo.png" width="150px" height="150px"></div>
            <form method="post">
                <div class="">
                    <label>Email Address</label>
                    <input class="" type="email" name="email" placeholder="employee@sonybuy.com">
                </div>
                <div class="">
                    <label>Password</label>
                    <input class="" type="password"  name="password" placeholder="************">
                </div>
                <button class="button" type="submit" name="submit"><a style="font-size:20px;">Login</a></button>
            </form>
        </div>
    </div>
</div>
<?php
    include 'includes/footer.php';
?>