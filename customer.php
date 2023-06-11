<script src="js/js.js"></script>  

<?php
    include 'includes/header.php';
    require('includes/config.php');
    if(isset($_POST['submit'])){
        $state              ="unassigned";
        $assign_to          ="employee";
        $name               =$_POST['name'];
        $email              =$_POST['email'];
        $phone              =$_POST['phone'];
        $prod_cat           =$_POST['product_category'];
        $purchase_date      =$_POST['purchase_date'];
        $product_sn         =$_POST['product_sn'];
        $prob_description   =$_POST['prob_description'];
        $tiket_issue_date   =$_POST['tiket_issue_date'];
        

        $query="INSERT INTO ticket (state,assign_to,name,email,phone,product_category,purchased_date,product_serial_number,problem_description,ticket_issue_date)
                         VALUES  ('$state','$assign_to','$name','$email','$phone','$prod_cat','$purchase_date','$product_sn','$prob_description','$tiket_issue_date')";
        mysqli_query($conn,$query);
        header("Location: index.php");
    }
?> 
    <button class="button button4" style="margin:1% 0 0 80%;" ><a href="index.php">Back</a></button>
<div class="hole-div">
    <div class="modern-form">
        <h2>Ticket FORM</h2>
        <!-- name  -->
        <form  method="post">
            <div class='float-label-field'>
                <label for="name">Name</label>
                <input name="name" type='text'>
            </div>
        <!-- email  -->
            <div class='float-label-field'>
                <label for="email" >Email</label>
                <input name="email" type='text'>
            </div>
        <!-- phone  -->
            <div class='float-label-field'>
                <label for="phone">Phone</label>
                <input name="phone" type='phone'>
            </div>
        <!-- product category  -->
            <div class='float-label-field'>
                <label for="product_category">Product Category</label>
                <input name="product_category" type='text'>
            </div>
        <!-- pruchase date  -->
            <div class='float-label-field'>
                <label for="purchase_date">Purchase Date</label>
                <input type="date" name="purchase_date">
            </div>

        <!-- product SN  -->
            <div class='float-label-field'>
                <label for="product_sn">Product Serial Number</label>
                <input name="product_sn" type='text'>
            </div>

        <!-- problem description  -->
            <div class='float-label-field'>
                <label for="prob_description">Problem Description</label>
                <textarea rows="4" name="prob_description" type='text'> </textarea>
            </div>

         <!-- ticket issue date  -->
            <div class='float-label-field'>
                <label for="tiket_issue_date">Ticket Issue Date</label>
                <input type="date" name="tiket_issue_date">
            </div>
            <input type="submit" onclick="Ticket()" class="button" name="submit" id="submit" value="Finish" >
        </form>
    </div>  
</div>
<?php
    include 'includes/footer.php';
?>