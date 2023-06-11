<?php
    include 'includes/header.php';
    require('includes/config.php');
?>
    <button class="button button2" style="margin:2% 0 0 5% ; scale:0.8;"><a href="index.php">Log out</a></button>
<?php
    $sql = "SELECT *FROM ticket ";
    $result = $conn->query($sql);
?>
  <table class="manage-table">
		<tr>
			<th>id</th>
            <th>State</th>
            <th>Assign To</th>
			<th>Customer <br> Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Product Category</th>
            <th>Purchase Date</th>
            <th>Product <br>Serial Number</th>
            <th>Problem Description</th>
            <th>Ticket Issue Date</th>
		</tr>	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr style="border:solid 2px black;">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['state']; ?></td>
            <td><a style="color:blue; font-size:16px;" href="update.php?Id=<?php echo $row['id']; ?>">Click To Assign </a></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['product_category']; ?></td>
			<td><?php echo $row['purchased_date']; ?></td>
            <td><?php echo $row['product_serial_number']; ?></td>
            <td><?php echo $row['problem_description']; ?></td>
            <td><?php echo $row['ticket_issue_date']; ?></td>		
		</tr>
	<?php } ?>
</table>  
<?php
    include 'includes/footer.php';
?>