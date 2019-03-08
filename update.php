<?php

if(isset($_POST['']))

$newid=$_POST['studentids'];
$newfirst=$_POST['firstnames'];
$newsur=$_POST['surnames'];
$newother=$_POST['othernames'];
$newemail=$_POST['emails'];
$newpassword=$_POST['passwords'];
$newconfirm=$_POST['confirmpasswords'];

include 'includes/db.php';




echo "your values have been updated succesfully";




?>