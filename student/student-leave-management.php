<?php include('header.php');?>
	<!------------------starts first section----------------------->
		
		<section>
			
			<div class="container ">
			
					<!--start form section-->
						<form method="post" action="#" class="">

								<div class="controls">
								<!-- row div1 starts--->
									<div class="row py-md-5">
										<div class="col-md-3">
										</div>
										<div class="col-md-6 h-style">
											<h5 class="py-3">LEAVE APPLICATION</h5>
											<div class="form-group">
												<label for="form_leave">Leave Type</label>
												<select id="form_leave" name="leave" class="form-control" required="required">
													<option value="">Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="Other">Other</option>
												</select>
												
											</div>
										</div>
									
										<div class="3">
										</div>
									</div>
								<!-- row div1 ends-->
								<!-- row div2 starts-->
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6">
											<div class="form-group radio-style">
												<label for="form_day">Day</label>
												<input id="form_day" type="radio" name="day"  class="" required="required" checked>Single
												<input id="form_day" type="radio" name="day"  required="required">Multi
												
											</div>
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div2 ends-->
								<!-- row div3 starts-->
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_leaveon">Leave On</label>
												<input id="form_leaveon" type="text" name="leave_on" class="text1 rounded px-md-5" placeholder="From Date" required="required">
												
											</div>
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div3 ends-->
								<!-- row div4 starts-->
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_session">Session</label>
												<div class="checkbox-style"><input id="form_session" type="checkbox" name="session" class=" check ml-5" required="required">Full Day</div>
												<div class="checkbox-style"><input id="form_session" type="checkbox" name="session" class=" ml-md-5" required="required">1st Hour
												<input id="form_session" type="checkbox" name="session" class=" ml-md-3" required="required">2nd Hour
												<input id="form_session" type="checkbox" name="session" class="ml-md-3" required="required">3rd Hour
												<input id="form_session" type="checkbox" name="session" class="ml-md-3" required="required">4th Hour</div>
												<div class="checkbox-style"><input id="form_session" type="checkbox" name="session" class="ml-md-5" required="required">5th Hour
												<input id="form_session" type="checkbox" name="session" class="ml-md-3" required="required">6th Hour
												<input id="form_session" type="checkbox" name="session" class="ml-md-3" required="required">7th Hour
												<input id="form_session" type="checkbox" name="session" class="ml-md-3" required="required">8th Hour</div>
											</div>
												
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div4 ends-->
								<!-- row div5 starts-->	
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_reason">Leave Reason</label>
												<input id="form_reason" type="text" name="reason" class="form-control" required="required">
												
											</div>
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div5 ends-->
								<!-- row div6 starts-->
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_message">Leave Description</label>
												<textarea id="form_message" name="message" class="form-control"  rows="3" required="required"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div6 ends-->
								<!-- row div7 starts-->
									<div class="row">
										<div class="col-md-3">
										</div>
										<div class="col-md-6 p-md-3">
											<input type="submit" class="btn btn-primary btn-send px-5">
										</div>
										<div class="3">
										</div>
									</div>
								<!-- row div7 ends-->
									
								</div>

							</form>
						<!--ends form section---->
					
			</div>
		</section>
	
	<!-----------------------------ends first section---------------->
		<?php include('footer.php');?>