

<body onload="hideDiv()">
<?php include('header.php')?>

		<div class="border">
		<h2>Notification</h2>
		<nav class="navbar-nav navbar-expand  ">
			
			
			 <ul class="navbar-nav   ">

            <!-- Nav Item - Alerts -->
            <li class="nav-item px-2">
              <a class="nav-link text-dark  " href="#" >
                <i class="fas fa-chalkboard"><p> Assessment</p></i>
              </a>
              
            </li>
			<li class="nav-item px-2">
              <a class="nav-link text-dark  " href="#" >
                <i class="fas fa-bullhorn"><p> Announcement</p></i>
              </a>
              
            </li>
				</ul>
				
			</nav>
		</div>
		<hr>
		<div class="row d-flex">
			          
            <div class="col-md-4">
              <button class="btn" id="b1" >
                Calendar
              </button>             
            </div>
			<div class="col-md-4 ">
              <button class="btn" id="b2" >
                Subjects
               </button>              
            </div>
			<div class="col-md-4 ">
              <button class="btn btn-at" id="b3" >
                Attendance
              </button>              
            </div>
				
            
		</div>
		
           	   
		

	<!---------------div section 3------------>	
			<div id="div1" class="py-5">Calendar page </div>
	<!---------------Subject section start------------>			
			<div id="div2" class=" py-5">
				<div class="row">
					<div class="col-md-3 py-2 ">
						<div class="card text-center">
							<h3>HTML</h3>
								<div class="cadrbody">
									<p>TUTOR</p>
									<p>(Vijith)</p>
								</div>
						</div>
					</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>PYTHON</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Anandhu)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>JAVA</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Amitha)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>DBMS</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
			</div>	
			</div>	
	<!---------------Subject section end------------>	
<!---------------Attendence section Start------------>	
			<div id="div3" class="py-5">Attendance</div>	
<!---------------Attendence section End------------>
                       
 <?php include('footer.php')?>    
<script>
$(document).ready(function(){
	
	
	
  $("#b1").click(function(){
    $("#div1").show();
	 $("#div2").hide();
	  $("#div3").hide();
  });
   $("#b2").click(function(){
    $("#div1").hide();
	 $("#div2").show();
	  $("#div3").hide();
  });
  $("#b3").click(function(){
    $("#div1").hide();
	 $("#div2").hide();
	  $("#div3").show();
  });
});

 function hideDiv() {
     document.getElementById("div2").style.display = 'none';   
	document.getElementById("div3").style.display = 'none';   	  
    }  
 </script>
 
 