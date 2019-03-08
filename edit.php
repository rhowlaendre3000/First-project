<?php ob_start(); ?>
<?php session_start(); 

if(!isset($_SESSION['user'])) {
	header('Location: index.php');
}

?>

<?php
		
		 require'includes/db.php';

     $conn=db($config);
     $tablename="registration";

	if (isset($_GET['edit'])){

		$studentid1=$_GET['edit'];


		 $result=all($tablename,'studentid',$conn,$studentid1);

		 $row=extract(array(
            'edited'=>$result

        ));

		 foreach($edited as $resit){
		//$run_edit=mysql_query("SELECT * FROM registration WHERE studentid='$studentid1'");
        //while($edit_row=mysql_fetch_array($run_edit)){

        	$studentid=$resit['studentid'];
        	$firstname=$resit['firstname'];
        	$surname=$resit['surname'];
        	$othername=$resit['othername'];
        	$email=$resit['emailaddress'];
        	$password=$resit['password'];
        	$confirmpassword=$resit['confirmpassword'];

        //}
	}

}

?>


<!DOCTYPE html>

<html>
<?php include 'includes/head.php'; ?>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">My Dashboard</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav pull-right">
				<li><p class="navbar-text">Hi! <?php echo $_SESSION['user']; ?></p></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="profile.php">Profile</a>
  <a href="products.php">Add Product</a>
  <a href="productlog.php">All Products</a>
  <a href="comments.php">Comments</a>
  <a href="logout.php">LogOut</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<hr/>

	<div class="wrapper container" style="border:3px solid lavender;  background-color: lavender;">
			<div class="row">
			<div class="col-sm-6" style="background-color:lavender;">

			<form method="post" action="edit.php?edit_form=<?php echo $studentid; ?>">

				<div class="form-group">

						    <label for="exampleInputEmail1">Username</label>
						    <input type="text" name="studentids" class="form-control"  aria-describedby="emailHelp" placeholder="Username" value="<?php echo $studentid; ?>" required >		   
				</div>



				 <div class="form-group">

					    <label for="exampleInputEmail1"> FIRST NAME</label>
					    <input type="name"  name="firstnames" class="form-control" aria-describedby="emailHelp" placeholder="first name" value="<?php echo $firstname; ?>" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">SURNAME</label>
					    <input type="name" name="surnames" class="form-control" placeholder="surname" value="<?php echo $surname; ?>" required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">OTHER NAME</label>
					    <input type="name" name="othernames" class="form-control" placeholder="other name" value="<?php echo $othername; ?>" required>
					  </div>

					  	<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" name="emails" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email; ?>" required>
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>

						   <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password"  data-validation="length alphanumeric" data-validation-length="min8" name="passwords" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $password; ?>" required>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Confirm Password</label>
							    <input type="password"  data-validation="length alphanumeric" data-validation-length="min8" name="confirmpasswords" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $confirmpassword; ?>" required>
							  </div>

							  <div class="row">
									  <div class="col-sm-12">
									    <div class="text-center">
									      <button type="submit" class="btn btn-primary btn-block" name="edit" id="singlebutton"> UPDATE</button>
									    </div>
									  </div>
									</div>
			</form>
					&nbsp;
					&nbsp;
						
					</div>


	</div>
</div>



<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery-1.10.2.js" type="text/javascript"></script>
<script src="javascript/script.js"></script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


			
	</body>



</html>



<?php

	if(isset($_POST['edit'])){
		$update_id=$_GET['edit_form'];
		$update_first=$_POST['firstnames'];
		$update_sur=$_POST['surnames'];
		$update_other=$_POST['othernames'];
		$update_email=$_POST['emails'];
		$update_password=$_POST['passwords'];
		$update_confirm=$_POST['confirmpasswords'];


		if($update_first=="" or $update_sur=="" or $update_other=="" or $update_email=="" or $update_password=="" or $update_confirm==""){

			echo "<script> alert('any of the fields is empty') </script>";
			exit();

		}else
		{
				$update_query=("UPDATE registration SET studentid=:update_id, firstname=:update_first, surname=:update_sur, othername=:update_other,

				emailaddress=:update_email, password=:update_password, confirmpassword=:update_confirm
				 WHERE studentid=:update_id ");
				//query($query,$tablename,$bindings,$conn)


				if(query($update_query,'registration', array(

					":update_id"=>$update_id,
					":update_first"=>$update_first,
					":update_sur"=>$update_sur,
					":update_other"=>$update_other,
					"update_email"=>$update_email,
					"update_password"=>$update_password,
					"update_confirm"=>$update_confirm
					),$conn


					)){

						echo "<script> alert('updated succesfully') </script>";
						header("Location:profile.php?");

				}

		}


	}




?>