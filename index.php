<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>

<html>

   
		
    <?php include 'includes/head.php'; ?>

	<body>  


			<?php include 'includes/nav.php'; ?>
          

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

<?php require'login.php'; ?>
     
 
		
				
	<section class="jumbotron text-center" id="sec1" style="padding-bottom:0px;">

        	<div class="img-wrapper">
       		<img id="img1" src="img/part2.jpg" class="img-fluid" alt="Responsive image" class="img-responsive">

       		<div class="img-overlay">
       			
               
             </div>
     		</div>

    </section>


     <div class="wrapper container" style="">
      <div class="row">
                <div class="col-lg-12 text-center" >
                    <h2><b>HOW IT WORKS...??</b></h2>
                    <h6>Be Up And Running In Some Few Minuites.....</h6>
                    <hr class="star-light">
                </div>
            </div>
      </div>

<div style=" background-color:lavender;" class="wrapper container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="text-align:left;"><b> AS A VENDOR.....</b></h2>
                  
                    <hr class="star-light">
                </div>
            </div>


  <div class="row">
  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
        <img src="img/capture.PNG" />
         <p><b>sign up</b></p>
        
      </div>
    </div>
  </div>

 
  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
         <img src="img/prod.PNG" /> 
        <p><b>add product</b></p>
      </div>
    </div>
  </div>


  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
         <img src="img/sell.PNG" />
        <p><b>start selling</b></p>
      </div>
    </div>
  </div>
</div>


  <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="text-align:left;"><b> AS A CUSTOMER.....</b></h2>
                  
                    <hr class="star-light">
                </div>
   </div>

  <div class="row">
  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
        <img src="img/capture.PNG" />
         <p><b>sign up</b></p>        
      </div>
    </div>
  </div>

 
  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
        
        <img src="img/search.PNG" />
        <p><b>search product</b></p>
       
      </div>
    </div>
  </div>


  <div class="col-lg-4">
    <div class="thumbnail">
     
      <div class="caption">
        <img src="img/sell.PNG" />
        <p><b>start buying</b></p>
       
      </div>
    </div>
  </div>
  </div>
</div>

<div class="wrapper container">
  <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 style="text-align:left; padding-left:30px; padding-right:30px;"><b> FEATURED PRODUCTS</b></h2>
                  
                    <hr class="star-light">
                </div>
   </div>
   </div>
 <section class="block">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="img/part3.jpg" alt="Slide1" />
            </div>
            <div class="item">
                <img src="img/part4.jpg"" alt="Slide2" />
            </div>
            <div class="item">
                <img src="img/part6.jpg" alt="Slide3" />
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
    </div>

</section>


 

  


  
<!-- Footer -->
<?php include'includes/footer.php'; ?>






</body>

</html>