<?php
    session_start();
    include 'includes/header.php';
    require('includes/config.php');
	$_SESSION['id'];
	$x =  	$_SESSION['id'];	
	$sql = "SELECT *FROM ticket WHERE employee_name = $x";
    $result = $conn->query($sql);
	while ($row = mysqli_fetch_array($result))
	
	{
?>
<div class="bg-employee">
	<div class="employee-card">
		<div >
			<label for="name">Customer Name</label>
			<h2><?php echo $row['name'];  ?></h2>
		</div>
		<div>
			<label for="email">Email</label>
			<h2><?php echo $row['email'];  ?></h2>
		</div>
		<div>
			<label for="phone">Phone</label>
			<h2><?php echo $row['phone'];  ?></h2>
		</div>
		<div>
			<label for="Category">Product Category</label>
			<h3><?php echo $row['product_category'];  ?></h3>
		</div>
		<div>
			<label for="purchased_date">Purchased Date</label>
			<h3><?php echo $row['purchased_date'];  ?></h3>
		</div>
		<div>
			<label for="product_serial_number">Serial Number</label>
			<h3><?php echo $row['product_serial_number'];  ?></h3>
		</div>
		<div>
			<label for="problem_description">Problem Discription</label>
			<h3><?php echo $row['problem_description'];  ?></h3>
		</div>
		<div>
			<label for="ticket_issue_date">Ticket Issue Date</label>
			<h3><?php echo $row['ticket_issue_date'];  ?></h3>
		</div>
	</div>
</div>
<?php }?>
    <button class="button button3" style = "margin:0 0 2% 5% ;"><a href="index.php">Log out</a></button>
<?php
    include 'includes/footer.php';
?>