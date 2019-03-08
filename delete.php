<?php ob_start(); ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?> 
 


<?php
    include 'includes/db.php';
     $conn=db($config);
     $tablename="products";

     if(isset($_GET['deleteprod'])){

     	$delete=$_GET['deleteprod'];
     	//$deletesession=$_SESSION['user'];

          
     	
     	if(delete($tablename,'prod_id',$delete,$conn)){ ?>

     		 <script>alert('post has been deleted')</script>;
               //uisng javascript for dis side..
               //an alert message which asks user if he wants to delete.
               //if yes continue else No....

     		<?php header('Location:adminproductlog.php');
     	} else{
            echo "shit didnt work";
        }
     	

     }

?>