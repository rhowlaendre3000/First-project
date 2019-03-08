<?php ob_start(); ?>
<?php session_start(); ?>


<!DOCTYPE html>




<html>
		
    <?php include 'includes/head.php'; 

    ?>


	<body>  

  <div style="height:100px;">
	<?php include 'includes/nav.php'; ?>
</div>

		<div class="container-fluid">
		<h3>REGISTER</h3>

		</div>

	<hr>

	<div class="wrapper container" style="border:3px solid lavender;  background-color: lavender;">
			<div class="row">
			<div class="" style="background-color:lavender;">

			<form method="post" action="admin.php">

				<div class="form-group">

						    <label for="exampleInputEmail1">Admin Username</label>
						    <input type="text" name="adminid" class="form-control"  aria-describedby="emailHelp" placeholder="Username" required >		   
				</div>



				

							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password"  data-validation="length alphanumeric" data-validation-length="min8" name="adminpassword" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							  </div>

							  <div class="row">
							  <div class="col-sm-4">
							  </div>
									  <div class="col-sm-4">
									    <div class="text-center">
									      <button type="submit" class="btn btn-primary btn-block" name="adminsubmit" id="singlebutton"> LOGIN</button>
									    </div>
									  </div>
									  <div class="col-sm-4">
									  </div>
									</div>
			</form>
					&nbsp;
					&nbsp;
							</div>


							
					</div>


	</div>
		&nbsp;
			&nbsp;
			&nbsp;


<div>
			<?php include'includes/footer.php'; ?>
			</div>

			
	</body>



</html>
