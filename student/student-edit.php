<?php include('header.php'); ?>

			<section>
				
						
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Edit Your Profile</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="login.php" method="">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Number</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="Admissin Number" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="Name" 
										readonly>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Roll Number</label>
                                    <div class="col-md-6">
                                        <input type="Number"  class="form-control box-bg" readonly>
                                    </div>
                                </div>
								
								

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Qualification">
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                    <div class="col-md-6 d-flex form-check">
									<select>
										<option selected>Choose..</option>
										<option value="1">Female</option>
										<option value="2">Male</option>
										<option value="3">Other</option>
									</select>
                                       
                                    </div>
                                </div>

									
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Course</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" readonly>
                                    </div>
                                </div>

                               

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Batch</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Batch" readonly>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg">
                                    </div>
                                </div>
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Admission Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control box-bg" readonly>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Father's Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="fname">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mother's Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="mname">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Blood</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Blood">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile Number</label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Parents Mobile Number</label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="pmobile">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                    <div class="col-md-6">
                                        <textarea  class="form-control box-bg" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right font-weight-bolder">Religion</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Religion">
                                    </div>
                                </div>


								<div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bolder">Category</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="Category">
                                    </div>
                                </div>
								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()">
                                        <a href="student-profile.php" class="text-light text-decoration-none">Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="student-edit.php" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
			</section>
		
<script>
	function say()
	{
		alert("successfully submitted");
	}
</script>
			
 

<!-- Footer -->
    <?php include('footer.php'); ?>