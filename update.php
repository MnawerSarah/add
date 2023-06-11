<?php
    include 'includes/header.php';
    require('includes/config.php');
    $sql = "SELECT * FROM `employee`";
    $all_employee = mysqli_query($conn,$sql);

    if (isset($_POST['update'])) {
        $employee_name =$_POST['employee_name'];
        $Id = $_POST['id'];
        $sta= "in progress";
        $sql = "UPDATE ticket SET employee_name='$employee_name', state='$sta' WHERE id=$Id";  
        if (mysqli_query($conn, $sql)) {
            header ("Location:manager.php");
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }
    } 
if (isset($_GET['Id'])) {

    $id = $_GET['Id']; 
   
    $sql = "SELECT * FROM `ticket` WHERE `id`='$id'";

    $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $employee_name = $row['employee_name'];
            $Id = $row['id'];
        } 
    ?>
<div class="update-style">
    <form action="" method="post">
        <select name="employee_name">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($employee_name = mysqli_fetch_array(
                        $all_employee,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $employee_name["id"]; 
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $employee_name["name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" onclick="assigned()" class="button button1" id="update" name="update" value="update">  
      </form> 
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
        </tr>
<?php
    $query="SELECT * FROM employee";
        $res= mysqli_query($conn,$query);
            while($emp= mysqli_fetch_assoc($res)){
?>
        <?php echo "<tr>";?>
        <?php  echo "  <td> {$emp['id']} </td>";?>
        <?php  echo "  <td> {$emp['name']} </td>";?>
        <?php echo "</tr>"; }?>
    </table>
</div>
<script src="js/js.js"></script>
<?php
     
    } 
}
    include 'includes/footer.php';
?> 