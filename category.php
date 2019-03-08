<?php ob_start(); ?>
<?php

session_start();

?>
<?php require 'login.php'; ?>
<?php  //require 'includes/db.php';
 $conn=db($config);
 $tablename="products";

 ?>



<!DOCTYPE html>

<html>
		
    <?php include 'includes/head.php'; ?>

    
    <div style="height:100px;">
	<?php include 'includes/nav.php'; ?>
	</div>

	<body>

		<div class="container-fluid">
		<h3><b>PRODUCTS</b></h3>
		</div>

	<hr/>

	








	
<?php 

	$rest=query('SELECT prod_name,prod_desc,prod_pic,unit_sales_price FROM products','products',
	null,$conn
	);


	$row=extract(array(
                   'result'=>$rest
                  ));
	
	foreach($result as $resit){
    
	 	$prodname=$resit['prod_name'];
		
	 	$salesunit=$resit['unit_sales_price'];
		
	 	$picture=$resit['prod_pic'];
	 	$description=$resit['prod_desc'];
		


	
/*
		$query=mysql_query("SELECT  register.firstname,register.surname,product.prod_name,product.prod_pic,
		product.unit_sales_price register JOIN product ON register.product=firstname,surname,prod_name,prod_pic,unit_sales_price");

		//$runquery=mysql_query($query);
		while($row=mysql_fetch_array($query)){
		$prodname=$row['prod_name'];
		$salesunit=$row['unit_sales_price'];
		$picture=$row['prod_pic'];
		$firstname=$row['firstname'];

		*/
?>
<div class="container" style="border:3px solid lavender;  background-color:;">

		<div class="row">

			<div class="col-sm-4">
			<a href="productinfo.php?product_info=<?=$prodname; ?>"><h4>PRODUCT NAME :  <?php echo strtoupper($prodname); ?></h4><br/></a>
			</div>

			<div class="col-sm-4">
			

			
			<h4>PRICE  : <?php echo "GH₵".$salesunit; ?></h4>
			<h4>DESRCIPTION  : <?php echo $description; ?></h4>
			<br/>
			

			</div>

			<div class="col-sm-4">
			<img src="productpics/<?php echo $resit['prod_pic']; ?>">
			</div>
			
		</div>

	</div>

	&nbsp;
	&nbsp;
<?php

		}
		?>







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



