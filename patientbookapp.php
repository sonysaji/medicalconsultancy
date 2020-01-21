
<!---Patient Book Appointments-------------->

<?php session_start();
include('connection.php');
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from patientappointment");?>

<?php include("patientbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
?>
<form role="form" class="frm" name="Myform" action="patientbookappinsert.php" method="POST" onsubmit="return form()">
  <div class="form-group">
    <label for="p_id">Patient ID:</label>
    <input type="text" class="form-control" id="id" name="p_id" required="required">
  </div>
  <div class="form-group">
    <label for="dr_name">Doctor Name:</label>
    <input type="text" class="form-control" id="name" name="dr_name" required="required" >
  </div>
  <div class="form-group">
    <label for="specialisation">Specialisation</label>
    <input type="text" class="form-control" id="specialisation" name="specialisation" required="required">
  </div>
  <div class="form-group">
    <label for="app_date">Appointment Date:</label>
    <input type="date" class="form-control" id="date" name="app_date" required="required">
  </div>

  Appointment Timing from:
  
    <input type="time" class="form-control inputcomponent mt-md-3 space" name="app_time_from" placeholder="">
  To
    <input type="time" class="form-control inputcomponent mt-md-3 space"  name="app_time_to" placeholder="">

    <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" required="required" value="pending" readonly> 
  </div>
  
  <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Submit</button>
</form>

<?php
?>



<!--view appointments from database-->
<h1> Booked Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientappointment")?>
<table class="">
<th class="frm">PATIENT ID</th>
<th class="frm">DOCTOR NAME</th>
<th class="frm">SPECIALISATION</th>
<th class="frm">APPOINTMENT DATE</th>
<th class="frm">APPOINTMENT TIME FROM</th>
<th class="frm">APPOINTMENT TIME TO</th>
<th class="frm">STATUS</th>






<?php while($row2=mysqli_fetch_assoc($result2))
     {?>

        <tr><td class="frm"><?php echo $row2["p_id"]?></td>
        <td class="frm"><?php echo $row2["dr_name"]?></td>
        <td class="frm"><?php echo $row2["specialisation"]?></td>
        <td class="frm"><?php echo $row2["app_date"]?></td>
        <td class="frm"><?php echo $row2["app_time_from"]?></td>
        <td class="frm"><?php echo $row2["app_time_to"]?></td>
        <td class="frm"><?php echo $row2["status"]?></td>
        


        </tr>
    <?php }
    ?>
</table>
