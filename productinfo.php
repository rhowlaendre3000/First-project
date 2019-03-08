<?php ob_start(); ?>
<?php

session_start();

/*if(!isset($_SESSION['studentid'])) {
    header('Location: index.php');
}*/



?>

<?php  include 'includes/db.php'; 

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
		<h3><b>PRODUCT INFORMATION</b></h3>

		</div>

	<hr>

	
	
    <?php
		if(isset($_GET['product_info'])){
            $prod=$_GET['product_info'];

            $rest=query("SELECT * FROM `products` WHERE `prod_name`=\"$prod\"",'products',
                null,$conn
                );



                $row=extract(array(
                    'result'=>$rest
                   ));

                   foreach($result as $resit){
                    $contact=$resit['contact'];
                    $id     =$resit['studentid'];
                    $name   =$resit['Name'];
                    $proddesc=$resit['prod_desc'];
                    $prodnames=$resit['prod_name'];
                    $prodimg=$resit['prod_pic'];
                    $prodsales=$resit['unit_sales_price'];
                    $prodstock=$resit['unit_in_stock'];
                    

                   }
                   
           /*  $query=query("SELECT * FROM products WHERE prod_name = '$prod'");
            while($show=mysql_fetch_array($query)){
                $proddesc=$show['prod_desc'];
                $prodnames=$show['prod_name'];
                $prodimg=$show['prod_pic'];
                $prodsales=$show['unit_sales_price'];
                $prodstock=$show['unit_in_stock'];

        }
 */

        ?>

        
        <div class="container" style="border:3px solid lavender;  background-color:;">
        
        <div class="row">

            <div class="col-sm-3">
            <h4>VENDOR NAME:  <?php echo strtoupper($name); ?></h4>
            <h4>VENDOR ID:  <?php echo strtoupper($id); ?></h4>
            <h4>CONTACT NUMBER: <?php echo $contact; ?></h4>
            </div>

            <div class="col-sm-3">
            <h4>PRODUCT NAME :  <?php echo strtoupper($prodnames); ?></h4><br/>
            
            </div>

            <div class="col-sm-3">
            

            
            <h4>PRICE  : <?php echo "GH₵".$prodsales; ?></h4><br/>
            

            </div>

            <div class="col-sm-3">
            <img src="productpics/<?php echo $resit['prod_pic']; ?>">
            </div>
            
        </div>

    </div>

    &nbsp;
    &nbsp;
<?php

        }
        else{
            print('shit');
        }
        ?>

	
		


	
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
                                        <input type="number" class="form-control" id="studentid" name="studentid" placeholder="Username"  required/>   
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