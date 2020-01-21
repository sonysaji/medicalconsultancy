<?php session_start();
include('connection.php');
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from patientsignup ");?>

<?php include("adminbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
?>

<!--view appointments from database-->
<h1> Doctor Details</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientsignup")?>
<table class="">
<th class="frm">PATIENT ID</th>
<th class="frm">FIRST NAME</th>
<th class="frm">LAST NAME</th>
<th class="frm">GENDER</th>
<th class="frm">ADDRESS</th>
<th class="frm">NATIONAL ID</th>



<?php while($row2=mysqli_fetch_assoc($result2))

    {?>

        <tr><td class="frm"><?php echo $row2["p_id"]?></td>
        <td class="frm"><?php echo $row2["last_name"]?></td>
        <td class="frm"><?php echo $row2["gender"]?></td>
        <td class="frm"><?php echo $row2["address"]?></td>
        <td class="frm"><?php echo $row2["n_id"]?></td>
        

        </tr>
    <?php }
    ?>
</table>

