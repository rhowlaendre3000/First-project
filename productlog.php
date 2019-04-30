<?php session_start(); 
if(!isset($_SESSION['user'])) {
  header('Location: index.php');
}

 include 'includes/db.php';
 $conn=db($config);
 $tablename="products";
 
  ?>

<?php



if(isset($_POST['upload'])){
  $studentid=$_SESSION['studentid'];
  $name     =$_POST['name'];
  $contact   =$_POST['contact'];
	$productid=$_POST['prodid'];
	$prodname=$_POST['prodname'];
  $prodimg = $_FILES['prodimg']['name'];
  $proddesc=$_POST['proddesc'];
	$temp_name=$_FILES['prodimg']['tmp_name'];
	 $unitstock=$_POST['unitstock'];
	$unitsales=$_POST['unitsales'];
	$location="productpics/";
}


 if(!empty($productid) && !empty($prodname) && !empty($name) && !empty($contact) && !empty($proddesc) && !empty($prodimg) && !empty($unitstock) && !empty($unitsales)){

      //query($query,$tablename,$bindings,$conn);
 		query("INSERT INTO products(studentid,Name,contact,prod_id,prod_name,prod_desc,prod_pic,unit_sales_price,unit_in_stock)
 			VALUES(:studentid,:name,:contact,:productid,:prodname,:proddesc,:prodimg,:unitsales,:unitstock)", $tablename,
              array(
                'studentid'=>$studentid,
                'name'     =>$name,
                'contact'  =>$contact,
                'productid'=>$productid,
                'prodname'=>$prodname,
                'proddesc'=>$proddesc,
                'prodimg'=>$prodimg,
                'unitsales'=>$unitsales,
                'unitstock'=>$unitstock
                ),$conn
              );


 	}

	if(isset($prodimg)){
        move_uploaded_file($temp_name,$location.$prodimg);
    }


?>

<?php



/*if(!isset($_SESSION['studentid'])) {
	header('Location: index.php');
}*/
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
 
  <a href="logout.php">LogOut</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<hr/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>PRODUCTS VIEW</h4>
        <div class="table-responsive">

                  

              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>PRODUCT ID</th>
                    <th>Product Name</th>
                     <th>Product Description</th>
                     <th>Product image</th>
                     <th>Unit in Stock</th>
                      <th>Unit Price</th>

                     
                       <th>Delete</th>
                       
                   </thead>

               <?php
               ?><?php
               
                $studentsession=$_SESSION['studentid'];


               $conn=db($config);
                $tablename="products";

                $rest=all($tablename,'studentid',$conn,$studentsession);

                $row=extract(array(
                   'results'=>$rest
                  ));
    

              //  $res=mysql_query("SELECT * FROM products WHERE studentid='$studentsession'");
               //while($row=mysql_fetch_array($res)){

                foreach($results as $resit){
                $studentdel=$resit['prod_id'];
                $proded=$resit['studentid']



?>
    <tbody>
      <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php echo $resit['prod_id'];  ?></td>
    <td><?php echo $resit['prod_name']; ?></td>
    <td><?php echo $resit['prod_desc']; ?></td>
    <td><img src="productpics/<?php echo $resit['prod_pic']?>"> </td>
    <td><?php echo $resit['unit_in_stock']; ?></td>
    <td><?php echo "GH₵".$resit['unit_sales_price']; ?></td>
   
    <td><a href="delete.php?deleteprod=<?php echo $studentdel; ?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
    
    </tr>
    <?php
   // include 'delete.php';
}


    ?>
    
    </tbody>
        
</table>
<?php echo var_dump($results);  ?>
<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>



    
    
   
   












<?php  ?>






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


$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});



</script>
</body>
</html>


