<?php ob_start();  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


<?php

     include 'includes/db.php';
      $conn=db($config);

     if(isset($_GET['deletestud'])){

     	$delete=$_GET['deletestud'];
     	$deletesession=$_SESSION['admin'];

        $deletequery=delete('registration','studentid',$delete,$conn);

     	//$deletequery= "DELETE FROM `register` WHERE `register`.`student_id` = $delete";
     	
     	if($deletequery){

     		echo "<script>alert('post has been deleted')</script>";
     		header('Location:adminproductlog.php');
     	}
     	else{
     		 echo "shit";
     	}

     }


?>