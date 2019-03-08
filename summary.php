<?php session_start(); 


require 'includes/db.php';
 $conn=db($config);
 $tablename="registration";


if(isset($_POST['submit'])){

		      $studentid=$_POST['studentid'];
          $firstname=$_POST['firstname'];
          $surname=$_POST['surname'];
          $othername=$_POST['othername'];
          $contact  =$_POST['contact'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $confirmpassword=$_POST['confirmpassword'];

	if(!empty( $studentid && $firstname && $surname && $othername && $email && $contact && $password && $confirmpassword)){


          $_SESSION['studentid']=$studentid;
          $_SESSION['firstname']=$firstname;
          $_SESSION['surname']=$surname;
          $_SESSION['othername']=$othername;
          $_SESSION['contact']=$contact;
          $_SESSION['email']=$email;
          $_SESSION['password']=$password;
          $_SESSION['confirmpassword']=$confirmpassword;



          
          query("INSERT INTO registration(studentid,firstname,surname,othername,contact,emailaddress,password,confirmpassword)
			VALUES(:studentid,:firstname,:surname,:othername,:contact,:email,:password,:confirmpassword)", $tablename,
       array(
                'studentid'=>$studentid,
                'firstname'=>$firstname,
                'surname'=>$surname,
                'othername'=>$othername,
                'contact' =>$contact,
                'email'=>$email,
                'password'=>$password,
                'confirmpassword'=>$confirmpassword
                ),$conn

      );
          

        }
       
    } else
        {
        	header("location: register.php");

        }

?>


<!DOCTYPE html>

<html>
		
    <?php include 'includes/head.php'; ?>

    

	<body>  
		<div style="height:100px;">
		<?php include 'includes/nav.php'; ?>
		</div>

		<div class="container-fluid">
		<h3>SUMMARY</h3>

		</div>
		<hr>

			<div class="wrapper container">
				

			<div> <h1> <?php echo strtoupper($_SESSION['firstname']).", Thank you for registering";  ?> </h1><br/>
        <h1>PLEASE <a href="category.php">CLICK HERE</a> TO START BUYING OR LOGIN TO START SELLING..</h1>


      </div>

			</div>

	   <div>
	   <?php include'includes/footer.php'; ?>
       </div>

	</body>


</html>



     
            <form role="form" class="form-horizontal"  id="login-form" class="login-form" method="post">
          <div class="modal fade" id="myModal" id="login-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
          <div class="modal-dialog login animated modal-lg">
           <div class="modal-content">
                     &nbsp;
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x </button>


        <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        
                        &nbsp;
                        <!-- Tab panes -->
                               
                               
                                <div id="err-msg"></div>
                                <div class="form-group form loginBox">
                                    <label for="studentid1" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="studentid" name="studentid" placeholder="Username"  required/>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" id="submit" name="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" />
                                            
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>


</div>

</div>
</div>


              

</div>
</div>
</div>
</form>

<?php include 'login.php'; ?>
