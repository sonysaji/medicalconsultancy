<?php session_start();
include('connection.php');
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from doctorsignup ");?>

<?php include("adminbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
?>

<!--view appointments from database-->
<h1> Doctor Details</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorsignup")?>
<table class="">
<th class="frm">ID</th>
<th class="frm">NAME</th>
<th class="frm">QUALIFICATION</th>
<th class="frm">SPECIALISATION</th>
<th class="frm">CLINIC TIME</th>






<?php while($row2=mysqli_fetch_assoc($result2))

    {?>

        <tr><td class="frm"><?php echo $row2["id"]?></td>
        <td class="frm"><?php echo $row2["name"]?></td>
        <td class="frm"><?php echo $row2["qualification"]?></td>
        <td class="frm"><?php echo $row2["specialisation"]?></td>
        <td class="frm"><?php echo $row2["timing"]?></td>
        

        </tr>
    <?php }
    ?>
</table>

