<?php

    require_once 'connection.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $n_id=$_POST['n_id'];
    $qualification=$_POST['qualification'];
	$specialisation=$_POST['specialisation'];
    $certificate_no=$_POST['certificate_no'];
    $address=$_POST['address'];
    $timing=$_POST['timing'];
    $username=$_POST['username'];
    $password=$_POST['password'];


		if(isset($_POST['submit']))
		{ 
            echo "Thank You!";

		$sql="INSERT INTO doctorsignup(name,email,n_id,qualification,specialisation,certificate_no,address,timing,username,password)VALUES('".$name."','".$email."',
        '".$n_id."','".$qualification."','".$specialisation."','".$certificate_no."','".$address."','".$timing."','".$username."','".$password."')";
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