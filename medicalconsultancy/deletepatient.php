<!---Fetching patient information from database-->

<?php
session_start();

include("adminbase.php");
include("connection.php");
?>

<h1>Patient Information</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientsignup")?>
<table class="">
<th class="frm">FIRST_NAME</th>
<th class="frm">LAST_NAME</th>
<th class="frm">GENDER</th>
<th class="frm">EMAIL</th>
<th class="frm">ADDRESS</th>
<th class="frm">NATIONAL_ID</th>
<th class="frm">USERNAME</th>
<th class="frm">PASSWORD</th>



<?php while($row2=mysqli_fetch_assoc($result2))
     {?>

        <tr>
        <form action="deletepatientsubmit.php" method="POST">
        <td class="frm"><input style="width:80px" class="" name="first_name" value="<?php echo $row2["first_name"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="last_name" value="<?php echo $row2["last_name"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="gender" value="<?php echo $row2["gender"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="email" value="<?php echo $row2["email"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="address" value="<?php echo $row2["address"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="n_id" value="<?php echo $row2["n_id"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="username" value="<?php echo $row2["username"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="password" value="<?php echo $row2["password"]?>" readonly></td>
        <td class="frm"><input type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="delete"></td>
        
</form>
        </tr>
        
    <?php }
    ?>
</table>
