<?php 
require 'db.php';

		$conn= db($config);
		$tablename="registration";

		$data=array();

		if($_SERVER['REQUEST_METHOD']==='POST'){
		$studentid=$_POST["studentid"];
		$firstname = $_POST["firstname"];
		$othername = $_POST["othername"];
		$surname = $_POST['surname'];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$confirmpassword=$_POST["confirmpassword"];

		//how to determine if a user is not already registered
		//assign the query string mysql_num_row to a variable
		//

		if(!empty($studentid)||!empty($firstname)||!empty($othername) || !empty($surname)||!empty($email)||!empty($password)||!empty($confirmpassword)){ 

				$call=all($tablename,'studentid',$conn,$studentid);

				if($call){

					//means it already exists..
					// so i will create a modal notice message which will output that it already exists and also be on that same page.
					echo "already exists";
				}

				else{


				//to determine if a user already exisst, 
				//call the all function which produces all records in the db..
				//and check the row count if it is greater than zero, means it already exists else otherwise...

				if ($password===$confirmpassword){
				query("INSERT INTO $tablename(studentid,firstname,surname,othername,emailaddress,password,confirmpassword) VALUES(:studentid,:firstname,:surname,:othername,:email,:password,:confirmpassword)", $tablename ,
				array('studentid'=>$studentid,
					   'firstname'=>$firstname,
					   'othername'=>$othername,
					   'surname'=>$surname,
					   'email'=>$email,
					   'password'=>$password,
					   'confirmpassword'=>$confirmpassword

			),$conn);
				
				$data['status']="forms completely filled. Thank you"; 
			} 
			 else
		{
			$data['status']="form not completely filled. do so";
			
		}
	}
		}


	} 
 ?>