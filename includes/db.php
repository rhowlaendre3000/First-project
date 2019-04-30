<?php 

$config=array(
	'username'=>'root',
	'password'=>''

	);

function db($config){

	try{
	$conn=new PDO("mysql:host=localhost; dbname=projectwork", $config['username'], $config['password']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $conn;
}	
catch(PDOException $e){
	return false;
}
}
function query($query,$tablename,$bindings,$conn){
	$stmt=$conn->prepare($query);
	$stmt->execute($bindings);
	return $stmt->rowCount()>0 ? $stmt : false;
}


function get($tablename,$conn){
		try{
		$results=$conn->query("SELECT * FROM $tablename");

		//$res=$conn->query("SELECT COUNT(*) FROM $tablename");
		//$num_rows=$res->fetchColumn();

		return ($results->rowCount()>0)
		? $results
		: false; 
	}
	catch(Exception $e){
		return false;
	}
	
	}

	function countquery($tablename,$conn){
		$num_rows=$conn->query("SELECT COUNT(*) FROM  $tablename")->fetchColumn();
		return $num_rows;
	}

	function countprod($tablename,$conn,$columname,$variable){
		$num_rows=$conn->query("SELECT COUNT(*) FROM  $tablename WHERE $tablename.$columname=$variable")->fetchColumn();
		return $num_rows;
	}

	function delete($tablename,$columname,$delvariable,$conn){
		try{
		$results=$conn->query("DELETE FROM $tablename WHERE $tablename.$columname=$delvariable");

		return ($results->rowCount()>0)
		? $results
		: false; 
	}
	catch(Exception $e){
		return false;
	}
	
	}

	function all($tablename,$columname,$conn,$studentid){
		try{
		$results=$conn->query("SELECT * FROM `$tablename` WHERE $columname='$studentid'");

		return ($results->rowCount()>0)
		? $results
		: false;


	}
	catch(Exception $e){
		return false;
	}
	
	}


?>