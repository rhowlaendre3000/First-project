<?php
session_start();
/*
if(!isset($_SESSION['student_id'])) {
  header('Location: index.php');
}*/
?>

<?php include 'includes/db.php'; ?>

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
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="adminprofile.php">Profile</a>
  <a href="adminproducts.php">Add Product</a>
  <a href="adminproductlog.php">All Products</a> 
  <a href="categorize.php">add categories</a>
   <a href="adminreports.php">reports</a>
  <a href="logout.php">LogOut</a>
</div>




<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<hr/>

<div class="wrapper container" style="border:3px solid lavender;  background-color: lavender;">
  <form method="post" action="adminreports.php" enctype="multipart/form-data">

        <div class="form-group">

                <label for="examples">Category ID:</label>
                <input type="number" name="catid" class="form-control"   placeholder="Category ID" required >      
        </div>


        <div class="form-group">

                <label for="examples">Category Name </label>
                <input type="name" name="catname" class="form-control"   placeholder="Category Name" required>       
        </div>

       



              <div class="form-group">

                <label for="examples">Product ID:</label>
                <input type="number" name="prodid" class="form-control"   placeholder="Product ID" required >    
       </div>

       <div class="form-group">
              <label for="comment">Category Description:</label>
              <textarea class="form-control" rows="5" name="catdesc" id="Product Description"></textarea>
              </div>

       

          <div class="row">
                  <div class="col-sm-4">
                  </div>
                    <div class="col-sm-4">
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block" name="addcat" id="singlebutton">Add Category</button>
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
