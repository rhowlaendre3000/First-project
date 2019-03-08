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
			<div class="col-sm-6" style="background-color:lavender;">

			<form method="post" action="summary.php">

				<div class="form-group">

						    <label for="exampleInputEmail1">Username</label>
						    <input type="text" name="studentid" class="form-control"  aria-describedby="emailHelp" placeholder="Username" required >		   
				</div>



				 <div class="form-group">

					    <label for="exampleInputEmail1"> FIRST NAME</label>
					    <input type="name"  name="firstname" class="form-control" aria-describedby="emailHelp" placeholder="first name" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">SURNAME</label>
					    <input type="name" name="surname" class="form-control" placeholder="surname" required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">OTHER NAME</label>
					    <input type="name" name="othername" class="form-control" placeholder="other name" required>
					  </div>

					  <div class="form-group">

						    <label for="exampleInputEmail1">Contact Number</label>
						    <input type="number" name="contact" class="form-control"  aria-describedby="emailHelp" placeholder="Contact" required >		   
				</div>

					  	<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>

						  

						   <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password"  data-validation="length alphanumeric" data-validation-length="min8" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Confirm Password</label>
							    <input type="password"  data-validation="length alphanumeric" data-validation-length="min8" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							  </div>

							  <div class="row">
									  <div class="col-sm-12">
									    <div class="text-center">
									      <button type="submit" class="btn btn-primary btn-block" name="submit" id="singlebutton"> SUBMIT</button>
									    </div>
									  </div>
									</div>
			</form>
					&nbsp;
					&nbsp;
							</div>


							<div class="col-sm-6" style="background-color:lavender;">
							
								<h5 style="text-align: center;">ALREADY HAVE AN ACCOUNT..??</h5>

									<div class="row">
									  <div class="col-sm-12">
									    <div class="text-center">
									      <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal" id="singlebutton"> LOGIN</button>
									    </div>


									  </div>
									</div>

									 <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
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
                               
                                <form role="form" class="form-horizontal"  id="login-form" html="{:multipart=>true}" method="post">
                                <div id="err-msg"></div>
                                <div class="form-group form loginBox">
                                    <label for="studentid1" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="studentid1" name="studentid" placeholder="Student ID"  required/>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm" >
                                            login</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>

</form>
</div>

</div>
</div>


              

</div>
</div>
</div>


      <?php  include 'login.php'; ?>


										

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
