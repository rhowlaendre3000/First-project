<!DOCTYPE html>

<html>
		
    <?php include 'includes/head.php'; ?>

    <div style="height:100px;">
	<?php include 'includes/nav.php'; ?>
	</div>

	<body>  
		<div class="container-fluid">
		<h3><b>ABOUT US</b></h3>

		</div>

	<hr>

	<div class="wrapper container" style="border:3px solid lavender;  font-size:16px;  background-color: lavender;">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<h3>SPARE PARTS STOP</h3>
		 <p> SPARE PARTS is a web application which is created suited for buying and selling by the Spare Parts Dealers in Ghana</p>
		 <p>. It contains wider</p>
		 <p> categories of spare parts products.<br/> Individuals can buy products directly on the page from a wide range of </p>
		 <p>choices and can 
		 can also upload their products unto the platform as retailers. Each usser has its own dashboard which contains a view </p>
		 <p>of the products being uploaded, profile of the user for editing and also statistics about the sales after registering.</p>
		<p> For integrity of the web platform, the administrator verifies users and also filters the kind of products they upload.</p>
		</div>
		<div class="col-sm-2">
		</div>


	</div>
	&nbsp;
	&nbsp;




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
                                        <input type="text" class="form-control" id="studentid" name="studentid" placeholder="Student ID"  required/>   
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

<?php // include 'login.php'; ?>