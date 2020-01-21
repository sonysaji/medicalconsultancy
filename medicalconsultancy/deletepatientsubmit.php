<!---Delete Patient information-->
<?php
require 'connection.php';

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
    
    $sq=mysqli_query($conn,"DELETE FROM patientsignup WHERE id=$id");


    header('location:deletepatient.php');

}
mysqli_close($conn);

?>