<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
</head>

<body id="page-top" class="">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/geminilogo.jpg" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        <!-- Divider -->
        <div class="side">
				<ul>
					<li>
             <a href="#">Doctor</a>
						<div class="subside">
							<ul>
								<li><a href="editdoctor.php">Edit information</a></li>
								<li><a href="deletedoctor.php">Delete information</a></li>
							</ul>
						</div>
					</li>
                 </ul>
          </div>
          <div class="side">
				<ul>
					<li>
                        <a href="#">Patient</a>
						<div class="subside">
							<ul>
								<li><a href="editpatient.php">Edit information</a></li>
								<li><a href="deletepatient.php">Delete information</a></li>
							</ul>
						</div>
					</li>
                 </ul>
          </div>
          <div class="side">
				<ul>
					<li>
                        <a href="#">Details</a>
						<div class="subside">
							<ul>
								<li><a href="doctordetails.php">Doctor's details</a></li>
								<li><a href="patientdetails.php">Patient's details</a></li>
							</ul>
						</div>
					</li>
                 </ul>
          </div>
      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item -ptrevious details-->
      <li class="nav-item">
        <a class="nav-link" href="adminstudentdetails.php">
         
          <span></span></a>
      </li>
	  
      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			
		
		
			<li class="nav-item">
              <a class="nav-link " href="index.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
      

     