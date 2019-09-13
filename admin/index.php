<?php 
include('../includes/db.php'); 
$subs = "SELECT * from subscriptions;"; 
$subsres = $con->query($subs); 
if(isset($_GET['delete_sub'])){
	include("delete_sub.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Links -->
	<link rel="stylesheet" type="text/css" href="style.css"><!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="/bistro/css/bootstrap.min.css"><!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/png" href="/bistro/images/logo/favicon.png"/><!-- Link for favicon -->
</head>
<body>
<a href="/bistro/">Back</a>
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