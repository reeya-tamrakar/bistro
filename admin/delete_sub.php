<?php 

    if(isset($_GET['delete_sub'])){
        
        $delete_sub_email = $_GET['delete_sub'];
        
        $delete_user = "DELETE FROM subscriptions WHERE email='$delete_sub_email'";
        
        $run_delete = mysqli_query($con,$delete_user);
        
        if($run_delete){
            
            echo "<script>alert('Subscription Email " . $delete_sub_email . " Deleted.')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
            
        }
        
    }

?>