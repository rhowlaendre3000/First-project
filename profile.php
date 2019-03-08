<?php
session_start();

if(!isset($_SESSION['user'])) {
	header('Location: login.php');
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
				<li><p class="navbar-text">Hi! <?= $_SESSION['user']; ?></p></li>
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
<div class="wrapper container">
	<div class="row">
			<div class="col-lg-4">
				<div class="thumbnail">
     
      <div class="caption">
       <img src="img/no_image.gif"  />
       <a href="javascript:;" class="edit-image-button offscreen" id="id1"><span>Change picture</span></a>

        
      </div>
    </div>

			</div>

			<div class="col-lg-8">
			<div class="thumbnail">
				


			
			<div class="caption">
				<h2> <?php echo $_SESSION['user'];    ?></h2>
				<hr/>
				<h3 style="text-align:center;">Basic Information</h3>
				<hr/>
				<div class="row">
					<div class="col-lg-4">
						<h4 style="font-weight:bold">FIRSTNAME  </h4>
						<h4 style="font-weight:bold">SURNAME</h4>
						<h4 style="font-weight:bold">OTHERNAME</h4>
						<h4 style="font-weight:bold">CONTACT NUMBER</h4>
						<h4 style="font-weight:bold">EMAIL</h4>
						<h4 style="font-weight:bold">PASSWORD</h4>
						

					</div>
					<div  class="col-lg-6">
						<h4 style="font-weight:bold"><?php echo $_SESSION['user']; ?></h4>
						<h4 style="font-weight:bold"><?php echo $_SESSION['surname']; ?></h4>
						<h4 style="font-weight:bold"><?php echo $_SESSION['othername']; ?></h4>
						<h4 style="font-weight:bold"><?php echo $_SESSION['contact']; ?></h4>
						<h4 style="font-weight:bold"><?php echo $_SESSION['email']; ?></h4>
						<h4 style="font-weight:bold"><?php echo "***********"; ?></h4>
					</div>
					<div  class="col-lg-2">
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						<a href="edit.php?edit=<?php echo $_SESSION['studentid']; ?>"><h4 style="font-weight:bold"> edit</h4></a>
						

					</div>



				</div>


			</div>
			</div>
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
