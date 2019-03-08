<?php
ob_start();
session_start();

if(!isset($_SESSION['user'])) {
	header('Location: index.php');
}
?>

<?php include 'includes/db.php'; ?>

<?php

$conn=db($config);
$tablename="products";


	if (isset($_GET['editprod'])){

		$prodid=$_GET['editprod'];

		$result=all($tablename,'prod_id',$conn,$prodid);

		
		 $row=extract(array(
            'edited'=>$result

        ));
        foreach($edited as $edit_row){

        	$prodid1=$edit_row['prod_id'];
        	$prodname=$edit_row['prod_name'];
        	$prodimg=$edit_row['prod_pic'];
        	$proddesc=$edit_row['prod_desc'];
        	$unitstock=$edit_row['unit_in_stock'];
        	$unitsales=$edit_row['unit_sales_price'];

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
	<form method="post" action="editprod.php?editprod=<?php echo $prodid1; ?>" enctype="multipart/form-data">

				<div class="form-group">

						    <label for="examples">Product ID:</label>
						    <input type="number" name="prodid" class="form-control" value="<?php echo $prodid; ?>"  placeholder="Product ID" required >		   
				</div>


				<div class="form-group">

						    <label for="examples">Product Name </label>
						    <input type="name" name="prodname" class="form-control" value="<?php echo $prodname; ?>"   placeholder="Product Name" required>		   
				</div>

				<div class="form-group">

						    <label for="examples">Product Image </label>
						    <input type="file" name="prodimg" class="form-control" style="width:50%;" value="<?php echo $prodimg; ?>" placeholder="Product Image" required>		   
				</div>


				<div class="form-group">
				      <label for="comment">Product Description:</label>
				      <textarea class="form-control" rows="5" name="proddesc" value="<?php echo $proddesc; ?>" id="Product Description"></textarea>
              </div>

              <div class="form-group">

						    <label for="examples">Unit in Stock:</label>
						    <input type="number" name="unitstock" class="form-control" value="<?php echo $unitstock; ?>"  placeholder="Unit in Stock" required >		   
			 </div>

			 <div class="form-group">

						    <label for="examples">Unit Sales Price:</label>
						    <input type="number" name="unitsales" class="form-control" value="<?php echo $unitsales; ?>"  placeholder="Unit Sales Price" required >		   
			 </div>

			 		<div class="row">
			 						<div class="col-sm-4">
			 						</div>
									  <div class="col-sm-4">
									    <div class="text-center">
									      <button type="submit" class="btn btn-primary btn-block" name="editproduct" id="singlebutton"> EDIT PRODUCTS</button>
									    </div>
									  </div>
									  <div class="col-sm-4">
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
	if(isset($_POST['editproduct'])){
		$update_id=$_GET['editprod'];
		$update_name=$_POST['prodname'];
		$update_img = $_FILES['prodimg']['name'];
		$update_desc=$_POST['proddesc'];
		$update_unitstock=$_POST['unitstock'];
		$update_unitsales=$_POST['unitsales'];
		$temp_name=$_FILES['prodimg']['tmp_name'];
		//$update_confirm=$_POST['confirmpasswords'];

		if($update_id=="" or $update_name=="" or $update_img=="" or $update_desc=="" or $update_unitstock=="" or $update_unitsales==""){

			echo "<script> alert('any of the fields is empty') </script>";
			exit();

		}else
		{
				$update_query=("UPDATE products SET prod_id=:update_id, prod_name=:update_name, prod_img=:update_img, prod_desc=:update_desc,

				unit_sales_price=:update_unitsales, unit_in_stock=:update_unitstock,
				 WHERE prod_id=:update_id ");
				//query($query,$tablename,$bindings,$conn)


				if(query($update_query,'products', array(

					"update_id"=>$update_id,
					"update_name"=>$update_name,
					"update_img"=>$update_img,
					"update_desc"=>$update_desc,
					"update_unitsales"=>$update_unitsales,
					"update_unitstock"=>$update_unitstock
					),$conn


					)){

						echo "<script> alert('updated succesfully') </script>";
						header("Location:profile.php?");

				}

		}


	}




 ?>
