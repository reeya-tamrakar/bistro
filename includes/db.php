<?php 

/* connection details  */
$servername = "sql308.epizy.com";
$username = "epiz_24181455";
$password = "8bXl1Ess0KAW1I";
$db = "epiz_24181455_bistro";

$servername = "localhost";
$username = "root";
$password = "";
$db = "bistro";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db) or die("Connection failed.");
?>