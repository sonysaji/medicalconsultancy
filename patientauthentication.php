
<?php
include("connection.php");

if (isset($_POST['submit']))
{
    $result=mysqli_query($conn,"SELECT * from patientsignup WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    echo "invalid username or password";

    if($count>0)
    {

        while($row=mysqli_fetch_assoc($result))
        {
        session_start();
        $_SESSION["id"]=$row["p_id"];
        header('location:patienthome.php');
        }
    }
    else{
        echo "invalid username or password";
    }
}
?>