<?php

    require_once 'connection.php';
   
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $n_id=$_POST['n_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];


		if(isset($_POST['submit']))
		{ 
            echo "Thank You!";

		$sql="INSERT INTO patientsignup(first_name,last_name,gender,email,address,n_id,username,password)VALUES('".$first_name."','".$last_name."',
        '".$gender."','".$email."','".$address."','".$n_id."','".$username."','".$password."')";
			if(!$result=$conn->query($sql))
			{
				die('There was an error running in the query['.$conn->error.']');
			}
			else
			{
				echo "Thank You!";
            }
        mysqli_close($conn);
			
		}
?>