<!----View doctor available appointments --->


<?php session_start();
include('connection.php');
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from doctorappointment ");?>

<?php include("patientbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
?>

<!--view appointments from database-->
<h1> Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorappointment")?>
<table class="">
<th class="frm">DOCTOR NAME</th>
<th class="frm">SPECIALISATION</th>
<th class="frm">DATE</th>
<th class="frm">FROM TIME</th>
<th class="frm">TO TIME</th>





<?php while($row2=mysqli_fetch_assoc($result2))

    {?>

        <tr>
        <td class="frm"><?php echo $row2["name"]?></td>
        <td class="frm"><?php echo $row2["specialisation"]?></td>
        <td class="frm"><?php echo $row2["date"]?></td>
        <td class="frm"><?php echo $row2["time_from"]?></td>
        <td class="frm"><?php echo $row2["time_to"]?></td>

        </tr>
    <?php }
    ?>
</table>

