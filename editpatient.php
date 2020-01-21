<!---View Patient information from database-->

<?php
session_start();

include("adminbase.php");
include("connection.php");
?>

<h1>Patient Information</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientsignup")?>
<table class="">
<th class="frm">PATIENT ID</th>
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
        <form action="editpatientsubmit.php" method="POST">
        <td class="frm"><input style="width:80px" class="" name="id" value="<?php echo $row2["id"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="first_name" value="<?php echo $row2["first_name"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="last_name" value="<?php echo $row2["last_name"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="gender" value="<?php echo $row2["gender"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="email" value="<?php echo $row2["email"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="address" value="<?php echo $row2["address"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="n_id" value="<?php echo $row2["n_id"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="username" value="<?php echo $row2["username"]?>"></td>
        <td class="frm"><input style="width:80px" class="" name="password" value="<?php echo $row2["password"]?>"></td>
        <td class="frm"><input type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="update"></td>
        
</form>
        </tr>
        
    <?php }
    ?>
</table>
