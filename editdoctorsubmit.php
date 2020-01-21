<!---Edit Doctor information--->
<?php
require 'connection.php';

$id=$_POST['id'];
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
    $sq=mysqli_query($conn,"update doctorsignup set id='".$id."',name='".$name."',email='".$email."',n_id='".$n_id."',qualification='".$qualification."',
    specialisation='".$specialisation."',certificate_no='".$certificate_no."',address='".$address."',timing='".$timing."',
    username='".$username."',password='".$password."'");

    header('location:editdoctor.php');

}
mysqli_close($conn);

?>