<?php 
	session_start();
	include("$_SERVER[DOCUMENT_ROOT]/bistro/includes/db.php");

	if(!isset($_SESSION['user'])){
        
        echo "<script>window.open('login','_self')</script>";
        
    }
    else{
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php if(isset($_GET['name']) && $_GET['name'] == 'dashboard'){
 	include("dashboard.php");
 }?>
 </body>
 </html>