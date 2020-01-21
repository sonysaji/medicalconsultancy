<?php

    require_once 'connection.php';
    $id=$_POST['id'];
    $name=$_POST['name'];
	$specialisation=$_POST['specialisation'];
    $date=$_POST['date'];
    $time_from=$_POST['time_from'];
    $time_to=$_POST['time_to'];
   


		if(isset($_POST['submit']))
		{ 
            echo "Thank You!";

		$sql="INSERT INTO doctorappointment(id,name,specialisation,date,time_from,time_to)VALUES('".$id."','".$name."',
        '".$specialisation."','".$date."','".$time_from."','".$time_to."')";
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