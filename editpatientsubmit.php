<!---Edit patient Information--->
<?php
require 'connection.php';
$id=$_POST['id'];
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
    $sq=mysqli_query($conn,"update patientsignup set id='".$id."',first_name='".$first_name."',last_name='".$last_name."',gender='".$gender."',email='".$email."',n_id='".$n_id."',
    username='".$username."',password='".$password."'");

    header('location:editpatient.php');

}
mysqli_close($conn);

?>