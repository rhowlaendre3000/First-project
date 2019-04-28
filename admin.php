<?php ob_start();  ?>

<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

//     if(!isset($_SESSION['admin'])) {
// 	header('Location: index.php');
// }
?>


<?php
     include 'includes/db.php';
     

     $conn=db($config);
     $tablename="admin";

     if(!$conn) die("cannot connect to database");


    if($_SERVER['REQUEST_METHOD']==="POST"){ 

        if(!empty($_POST['adminid']) && !empty($_POST['adminpassword'])){
    

      $adminid = trim($_POST['adminid']);
      $adminid = strip_tags($adminid);
      $adminid = htmlspecialchars($adminid);
      
      $adminpassword = trim($_POST['adminpassword']);
      $adminpassword = strip_tags($adminpassword);
      $adminpassword = htmlspecialchars($adminpassword);


      $result=get($tablename,$conn);
      $row=extract(array(
            'results'=>$result

        ));

       foreach($results as $resit){

        if($adminid==$resit['admin'] && $adminpassword==$resit['admin_password']){
                       $_SESSION['admin'] = $resit['admin_firstname'];
                       $_SESSION['adminsurname'] = $resit['admin_surname'];
                       $_SESSION['adminothername'] = $resit['admin_othername'];
                       $_SESSION['adminemail'] = $resit['admin_email'];
                       $_SESSION['adminpassword'] = $resit['admin_password'];
                       $_SESSION['adminid'] = $resit['admin']; 

          header('location:adminprofile.php');
          //real codes follow later
        }

        else
        {

          //print_r($password);
          echo "i am with u nigga";
          echo var_dump($adminid);
        }


        //print_r($resit);
      }
    }
      else{
          echo "please fill the spaces";

      }
    }


   else{
     

      echo "failed";
    }

     
      
    

?>
         


       




    



