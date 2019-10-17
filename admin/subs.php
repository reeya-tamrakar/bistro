<?php 
include('/bistro/includes/db.php'); 
$subs = "SELECT * from subscriptions;"; 
$subsres = $con->query($subs); 
if(isset($_GET['delete_sub'])){
	include("delete_sub.php");
}
$email=$_POST['email'];

$insert = "INSERT INTO subscriptions (email) VALUES('$email');";

	if(mysqli_query($con,$insert))
	{
		echo "<br>Successfully Sent.<br>";
		echo "<button onclick='window.history.back();'>Back</button>";	
	}
	else
	{
		echo "<br>Error.";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Subscriptions</title>
</head>
<body>
<h2>Subscriptions</h2>
<table class="table table-hover">
	<thead class="thead-light">
		<th scope="col">S.N.</th>
		<th scope="col">Email</th>
		<th scope="col">Delete</th>
	</thead>
	<tbody>
		<?php
		$i=1;
		if ($subsres->num_rows > 0) {
		// if data greater than 0 
		    while($row = $subsres->fetch_assoc()) {
		        echo "<tr><td>" . $i . "</td><td>" . $row['email'] . "</td><td><a class='btn btn-primary text-white' href='index.php?delete_sub=" . $row['email'] . "'>Delete</a></td>";
		        $i++;
		    }
		} 
		else {
	    	echo "<tr><td colspan='3' class='text-center'>0 results</td></tr>";
		}
		?>
	</tbody>
</table>
</body>
</html>