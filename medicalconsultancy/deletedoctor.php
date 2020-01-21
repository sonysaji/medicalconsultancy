<!---Fetching doctor information from database-->
<?php
session_start();

include("adminbase.php");
include("connection.php");
?>

<h1>Doctor Information</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorsignup")?>
<table class="">
<th class="frm">ID</th>
<th class="frm">DOCTOR NAME</th>
<th class="frm">EMAIL</th>
<th class="frm">NATIONAL ID</th>
<th class="frm">QUALIFICATION</th>
<th class="frm">SPECIALISATION</th>
<th class="frm">CERTIFICATE NO</th>
<th class="frm">CLINIC ADDRESS</th>
<th class="frm">CLINIC TIMING</th>
<th class="frm">USERNAME</th>
<th class="frm">PASSWORD</th>

<th class="frm"></th>



<?php while($row2=mysqli_fetch_assoc($result2))
     {?>

        <tr>
        <form action="deletedoctorsubmit.php" method="POST">
        <td class="frm"><input style="width:20px" class="" name="id" value="<?php echo $row2["id"]?>" readonly></td>
        <td class="frm"><input style="width:60px" class="" name="name" value="<?php echo $row2["name"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="email" value="<?php echo $row2["email"]?>" readonly></td>
        <td class="frm"><input style="width:60px" class="" name="n_id" value="<?php echo $row2["n_id"]?>" readonly></td>
        <td class="frm"><input style="width:60px" class="" name="qualification" value="<?php echo $row2["qualification"]?>" readonly></td>
        <td class="frm"><input style="width:80px" class="" name="specialisation" value="<?php echo $row2["specialisation"]?>"readonly></td>
        <td class="frm"><input style="width:80px" class="" name="certificate_no" value="<?php echo $row2["certificate_no"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="address" value="<?php echo $row2["address"]?>"readonly></td>
        <td class="frm"><input style="width:60px" class="" name="timing" value="<?php echo $row2["timing"]?>" readonly></td>
        <td class="frm"><input style="width:60px" class="" name="username" value="<?php echo $row2["username"]?>"readonly></td>
        <td class="frm"><input style="width:60px" class="" name="password" value="<?php echo $row2["password"]?>" readonly></td>
        <td class="frm"><input type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="delete"></td>
</form>

        </tr>

    <?php }
    ?>
</table>
