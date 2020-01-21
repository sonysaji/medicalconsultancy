<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Attendence</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  
 </head>
 
 <body>
<?php include('header.php');?>
	
<div class= "container my-2 table-bordered ">
	<div class="row">
		<div class="col-md-1">
			<a href="#" class="mx-2">Calender</a>
			</div>
			<div class="col-md-1">
			<a href="#" class="mx-2">Timetable</a>
			</div>
		
			<div class="col-md-1">
			<a href="#" class="mx-2">Subject</a>
			</div>
		
			<div class="col-md-2 border border-light">
			<a href="#" class="text-info ">Attendance</a>
			</div>
			</div>
		
		
	</div>
	
<!---------------------------------------------- section2---------------------------------------------->
<div class="container-fluid table-bordered">
<div class=" py-3">
	<div class="row py-3">
		<div class="col-md-12 border-bottom ">
			<p class="text-info text-center">Subject Wise Attendence Report(Hour-Wise)</p>
		</div>
	</div>
	
	
	<div>
	<div style="overflow-x:auto;">
		<table class="table table-striped table-bordered text-info text-center tab">
			<thead>
				<tr>
					<th>Sl.No</th>
					<th>Subject</th>
					<th>No of attended hour</th>
					<th>Total Hour</th>
					<th>Attendence %</th>
					<th> Attendence % In Class</th>					
				</tr>
			</thead>	
			<tbody>
				<tr>
					<td>1</td>
					<td>zxcvgbhnm,sdfg</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>zxcvgbhnm,sdf</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					
				</tr>
				<tr>
					<td>1</td>
					<td>zxcvgbhnm</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					
				</tr>
			</tbody>
			
			<tfoot>
			<tr>
					<th colspan="2" class="text-center">Total</th>
					<th>0</th>
					<th>0</th>
					<th>0</th>
					<th>0</th>
			</tr>
			</tfoot>
					
					
		
		</table>
		</div>
	</div>
</div>
</div>




<?php include('footer.php');?>
 </body>

 </html>