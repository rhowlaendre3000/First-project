<?php

session_start();

/*if(!isset($_SESSION['studentid'])) {
	header('Location: index.php');
}*/
?>

<?php require 'includes/db.php';

  $conn=db($config);

 ?>


<?php

  
if(isset($_POST['addcat'])){
  $studentid= $_SESSION['adminid'];
  $catid=$_POST['catid'];
  $catname=$_POST['catname'];
  $prodid=$_POST['prodid'];
  $catdesc=$_POST['catdesc'];




  if(!empty($catid && $catname && $prodid && $catdesc)){

   // $query = "INSERT INTO category(cat_id,cat_name,prod_id,cat_desc) VALUES('$catid','$catname','$prodid','$catdesc')";
    //$results=mysql_query($query);
    $results=query("INSERT INTO category(cat_id,cat_name,prod_id,cat_desc) VALUES(:catid,:catname,:prodid,:catdesc)",'category',


      array(
        ":catid"=>$catid,
        ":catname"=>$catname,
        ":prodid"=>$prodid,
        ":catdesc"=>$catdesc),$conn);
    
    if($results){

          }
   else {
    echo "shit";
  }
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
				<li><p class="navbar-text">Hi! <?php echo $_SESSION['admin']; ?></p></li>
				<li><a href="logoutadmin.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="adminprofile.php">Profile</a>
  <a href="adminproducts.php">Products</a>
  <a href="adminproductlog.php">All Products</a>
  <a href="categorize.php">add categories</a>
  <a href="adminreports.php">reports</a>
  <a href="logoutadmin.php">LogOut</a>
</div>



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<hr/>

<div class="wrapper container" style="border:3px solid lavender;  background-color: lavender;">
	<div class="row">
		<div class="col-sm-6">
		<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">NUMBER OF USERS</div>

  <!-- Table -->
   <div class="table-responsive" >
  <table id="mytable" class="table class="table table-bordred table-striped"">
  <thead>
  <th><input type="checkbox" id="checkall" /></th>
                   <th> ID</th>
                    <th> Name</th>
                     <th>total prod</th>
                     
                    
                      <th>Delete</th>
    ...
    </thead>
<?php //$res=mysql_query("SELECT * FROM register");
          $res=get('registration',$conn);

          $row=extract(
            array('rest'=>$res)); 
          foreach($res as $resit){
               //while($row=mysql_fetch_array($res)){
               	$studentdel=$row['studentid'];



   ?>

<tbody>
    <?php
        
    ?>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php echo $resit['studentid']; ?></td>
    <td><?php echo $resit['firstname']; ?></td>
    
    <td><?php  echo countprod('products',$conn,'studentid',$resit['studentid']);?></td>
     
    <td><a href="admindelete.php?deletestud=<?= $resit['studentid']; ?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>

    <?php

}

?>
</tbody>

  </table>
</div>
</div>
<?php 
	 //$restd=get("registration",$conn);
  countquery('category',$conn);
  
     
?>
<div class="panel panel-default">
<div class="panel-heading">TOTAL NUMBER OF USERS <b>: <?= countquery('registration',$conn); ?></b></div>

</div>
<div class="panel panel-default">
<div class="panel-heading">TOTAL NUMBER OF PRODUCTS <b>: <?= countquery('products',$conn); ?></b></div>

</div>
		</div>

		<div class="col-sm-6">
		</div>
	
		<div class="col-sm-6">
		<div class="panel panel-default">


  <!-- Default panel contents -->
  <div class="panel-heading">CATEGORIES</div>

  <!-- Table -->
   <div class="table-responsive" >
  <table id="mytable" class="table class="table table-bordred table-striped"">
  <thead>
  <th><input type="checkbox" id="checkall" /></th>
                   <th> CATEGORY ID</th>
                    <th> CATEGORY NAME</th>
                     <th>total Products</th>
                     
                     <th>Edit</th>
                      <th>Delete</th>
    ...
    </thead>

<?php  $result=get('category',$conn);

               $row=extract(array("resit"=>$result));

               foreach($resit as $rest){



  
      
   ?>

    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php echo $rest['cat_id']; ?></td>
    <td><?php echo $rest['cat_name']; ?></td>
    
    <td><?php echo countprod('category',$conn,'cat_id',$rest['cat_id']);?></td>
     <td><a href="editprod.php?editprod=<?php echo $rest['prod_id']; ?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    <?php
}
?>
</tbody>

  </table>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">TOTAL NUMBER OF CATEGORIES <b>: <?= countquery('category',$conn);  ?></b>

</div>

</div>

		</div>
	
		<div class="col-sm-6">
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
