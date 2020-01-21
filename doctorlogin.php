	<!------------------admin login page----------------------->
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	
		<title>Login</title>
	</head>
	<body>
	<!------------------starts first section----------------------->
		<header class="bg-color py-2">
			<h5 class="container">Gemini Consultancy service</h5>
		</header>
		<section>
			<h4 class="py-4 text-dark text-center text-h">Medical consultancy at any place and any time.</h4>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form action="doctorauthentication.php" name="login" method="post" onsubmit="return validateForm()" class="m-auto py-3 jumbotron text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Sign In</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name='username'  placeholder="Username">
							
								<input type="password" class="form-control inputcomponent mt-md-3 space" name='password'  placeholder="Password">
							
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								<span class="google-button__icon">	
								</span>
								<div class='text-center m-t-10'>
									<a class="text-dark" href="doctorsignup.php">new user?</a><br>
									<a href="doctorsignup.php"> Signup</a>
								</div>

						</form>
					</div>
				</div>
			</div>
		</section>
	<footer class="bg-color py-2 foot text-center">
			<h5 class="text-center">Powered by GCS </h5>
		</footer>	
	<!-----------------------------ends first section---------------->
    	<!-----------------------------Form validation function---------------->

    <script>
	function validateForm() {
       var x = document.forms["login"]["username"].value;
       var y = document.forms["login"]["password"].value;
      if (x =="" || y =="") {
          alert("Fill all the fields");
          return false;
                }
 
             }
   </script>		
<!-----------------------------Form validation function ends---------------->

</body>
</html>