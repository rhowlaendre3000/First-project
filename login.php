<?php ob_start();  ?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
     require'includes/db.php';

     $conn=db($config);
     $tablename="registration";

      if(!$conn) die("cannot connect to database");


    if($_SERVER['REQUEST_METHOD']==="POST"){ 

        if(!empty($_POST['studentid']) && !empty($_POST['password'])){



        

      $studentid = trim($_POST['studentid']);
      $studentid = strip_tags($studentid);
      $studentid = htmlspecialchars($studentid);
      
      $password = trim($_POST['password']);
      $password = strip_tags($password);
      $password = htmlspecialchars($password);


    

      $result=all($tablename,'studentid',$conn,$studentid);
      
      $row=extract(array(
            'results'=>$result

        ));
    
      foreach($results as $resit){

        if($studentid==$resit['studentid'] && $password==$resit['password']){
          $_SESSION['user']=$resit['firstname'];
          $_SESSION['surname']=$resit['surname'];
          $_SESSION['othername']=$resit['othername'];
          $_SESSION['contact']=$resit['contact'];
          $_SESSION['email']=$resit['emailaddress'];

          $_SESSION['password']=$resit['password'];
          $_SESSION['studentid']=$resit['studentid'];

          header('location:profile.php');
          //real codes follow later
        }

        else
        {

          //print_r($password);
          echo "i am with u nigga";
        }


        //print_r($resit);
      }
    }
      else{
          echo "please fill the spaces";

      }
    }
       


              
   
  //                      //$passwordd = hash('sha256', $password); // password hashing using SHA256
  //                     //get('registration',$conn,3);
                      
  // $result = mysql_query("SELECT * FROM registration WHERE studentid='$studentid'");
  //                       $row=mysql_fetch_array($result);
  //                       $count = mysql_num_rows($result); // if uname/pass correct it returns must be 1 row
  //                        echo "through";

  //                      // if( $results->rowCount()>0 /*$row['password']==$password*/) {
  //                      // $_SESSION['user'] = $row['firstname'];
  //                      // $_SESSION['surname'] = $row['surname'];
  //                      // $_SESSION['othername'] = $row['othername'];
  //                      // $_SESSION['email'] = $row['email'];
  //                      // $_SESSION['password'] = $row['password'];
  //                      // $_SESSION['studentid'] = $row['student_id']; 
  //                      // echo "success";
  //                      // header('Location:profile.php');

                       

  //                      // }
  //                     /*elseif ($count==0 && $row['studentid']==1111) {
  //                              $_SESSION['admin'] = $_POST['studentid'];
  //                               // Jump to secured page
  //                               header('Location:admin.php');
  //                      }*/
  // //                       else
  // //                       {
  // //                       echo "shit";

  // // }            

            
       else{
      echo "failed";
    }
    

?>





    
