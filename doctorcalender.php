<?php session_start();
include('connection.php');
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from doctorsignup WHERE id=$var");?>

<?php include("doctorbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
?>
<form role="form" class="frm" name="Myform" action="doctorcalenderinsert.php" method="POST" onsubmit="return form()">
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control" id="id" name="id" required="required" value="<?php echo $var?>">
  </div>
  <div class="form-group">
    <label for="name">Doctor Name:</label>
    <input type="text" class="form-control" id="name" name="name" required="required" value="<?php echo $row2["dr_name"]?>" >
  </div>
  <div class="form-group">
    <label for="specialisation">Specialisation</label>
    <input type="text" class="form-control" id="specialisation" name="specialisation" required="required" value="<?php echo $row2["dr_name"]?>">
  </div>
  <div class="form-group">
    <label for="date">Select Available Dates:</label>
    <input type="date" class="form-control" id="date" name="date" required="required">
  </div>

  Available Timing from:
  
    <input type="time" class="form-control inputcomponent mt-md-3 space" name="time_from" placeholder="">
  To
    <input type="time" class="form-control inputcomponent mt-md-3 space"  name="time_to" placeholder="">

  
  
  <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Submit</button>
</form>

<?php
?>

<!--view appointments from database-->
<h1> Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorappointment where id=$var")?>
<table class="">
<th class="frm">DATE</th>
<th class="frm">FROM TIME</th>
<th class="frm">TO TIME</th>





<?php while($row2=mysqli_fetch_assoc($result2))

    {?>

        <tr><td class="frm"><?php echo $row2["date"]?></td>
        <td class="frm"><?php echo $row2["time_from"]?></td>
        <td class="frm"><?php echo $row2["time_to"]?></td>

        </tr>
    <?php }
    ?>
</table>
