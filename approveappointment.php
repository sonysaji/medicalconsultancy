<!-----------------------------adding appointments details to database ---------------->
<?php
require_once 'connection.php';
$name=$_POST['name'];
$special=$_POST['special'];

if(isset($_POST['submit']))
{
    $sq=mysqli_query($conn,"update patientappointment SET status='approved' where name='".$name."' and  speciality='".$special."'");
    header('location:managePatientappointments.php');
 
}
mysqli_close($conn);
?>