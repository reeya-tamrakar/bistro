<?php 
include('/bistro/includes/db.php');
$email=$_POST['email'];

echo $email;

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