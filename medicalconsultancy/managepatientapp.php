<?php 
session_start();

include("doctorbase.php");
include("connection.php"); 
$var=$_SESSION["id"];
$result=mysqli_query($conn,"SELECT * from doctorsignup where id=$var");
$row=mysqli_fetch_assoc($result);
?>
<h1>APPOINTMENTS</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientappointment where speciality='".$row["specialisation"]."' AND name='".$row["name"]."'") ?>
<table class="">
<th class="frm">NAME </th>
<th class="frm">SPECIALISATION </th>
<th class="frm">DATE </th>
<th class="frm">FROM TIME</th>
<th class="frm">TO TIME</th>
<th class="frm">STATUS</th>
<th class="frm"></th>




<?php while($row=mysqli_fetch_assoc($result))
        {?>
       
                   <tr>
                   <form action="approveappointment.php" method="POST">
                   <td class="frm"><input class="frm" name="name" value="<?php echo $row2["name"] ?>" readonly></td>
                   <td class="frm"><input class="frm" name="special" value="<?php echo $row2["speciality"] ?>" readonly></td>
                    <td  class="frm"><?php echo $row2["date"] ?></td>
                    <td class="frm"><?php echo $row2["fromtime"] ?></td>
                    <td class="frm"><?php echo $row2["totime"] ?></td>
                    <td class="frm"><?php echo $row2["status"] ?></td>
                    <td class="frm"><input type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="approve"></td>

                    </form>

                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       