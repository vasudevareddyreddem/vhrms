<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Add Doctor 
      </h1>
		<ol class="breadcrumb">
			<li><a class="btn btn-primary text-white btn-xs " href="<?php echo base_url('doctor'); ?>">Doctor List</a>
			</li>
			
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('doctor/addpost'); ?>" enctype="multipart/form-data">
							
						<div class=" row ">
							<div class=" col-md-12 ">
								 <div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Doctor name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="name" placeholder="Enter Doctor name" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Email</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="email" placeholder="Enter Doctor email" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Password</label>
									<div class="col-md-8">
										<input type="password" class="form-control" name="pwd" placeholder="Enter Password" />
									</div>
								</div> 
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Confirm Password</label>
									<div class="col-md-8">
										<input type="password" class="form-control" name="confirmpwd" placeholder="Enter Confirm Password" />
									</div>
								</div> 
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Speciality</label>
									<div class="col-md-8">
										<select class="form-control" name="speciality">
											<option value="">Select</option>
											<?php if(isset($s_list) && count($s_list)>0){ ?>
											<?php foreach($s_list as $li){ ?>
												<option value="<?php echo $li['s_id']; ?>"><?php echo $li['name']; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Phone Number</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="mobile" placeholder="Enter Phone Number" />
									</div>
								</div>
									<div class="form-group col-md-6">
									<label class="col-lg-4 control-label" >Address</label>
									<div class="col-md-8">
									<textarea class="form-control" name="address"></textarea>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Consultation fee</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="c_fee" placeholder="Enter Consultation fee" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Consultation Free day</label>
									<div class="col-md-8">
										<select class="form-control" name="free_days">
											<option value="">Select</option>
											<option value="1">1 Day</option>
											<option value="2">2 Day</option>
											<option value="3">3 Day</option>
											<option value="4">4 Day</option>
											<option value="5">5 Day</option>
											<option value="6">6 Day</option>
											<option value="7">7 Day</option>
											<option value="8">8 Day</option>
											<option value="9">9 Day</option>
											<option value="10">10 Day</option>											
											<option value="11">11 Day</option>											
											<option value="12">12 Day</option>											
											<option value="13">13 Day</option>											
											<option value="14">14 Day</option>											
											<option value="15">15 Day</option>											
											<option value="16">16 Day</option>											
											<option value="17">17 Day</option>											
											<option value="18">18 Day</option>											
											<option value="19">19 Day</option>											
											<option value="20">20 Day</option>											
											<option value="21">21 Day</option>											
											<option value="22">22 Day</option>											
											<option value="23">23 Day</option>											
											<option value="24">24 Day</option>											
											<option value="25">25 Day</option>											
											<option value="26">26 Day</option>											
											<option value="27">27 Day</option>											
											<option value="28">28 Day</option>											
											<option value="29">29 Day</option>											
											<option value="30">30 Day</option>											
										</select>
									</div>
								</div>								
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">From</label>
									<div class="col-md-8 bootstrap-timepicker">
									<input type="text" class="form-control timepicker" name="f_time"  />
									</div>
								</div>	
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">To</label>
									<div class="col-md-8 bootstrap-timepicker">
									<input type="text" class="form-control timepicker" name="t_time"  />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Profile</label>
									<div class="col-md-8 ">
									<input type="file" class="form-control " name="image"  />
									</div>
								</div>
								
								
						</div>
				
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-12 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add Doctor</button>
								</div>
							</div>
						</form>
						
						
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    $('#defaultForm').bootstrapValidator({
			fields: {
	            name: {
	                validators: {
						notEmpty: {
							message: 'Doctor name is required'
						},
						regexp: {
						regexp: /^[a-zA-Z0-9. ]+$/,
						message: 'Doctor name can only consist of alphanumeric, space and dot'
						}
					}
	            },email: {
	                validators: {
						notEmpty: {
							message: 'Email is required'
						},
						regexp: {
						regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
						message: 'Please enter a valid email address. For example johndoe@domain.com.'
						}
					}
	            },
				pwd: {
					validators: {
						notEmpty: {
							message: 'Password is required'
						},
						stringLength: {
							min: 6,
							message: 'Password  must be at least 6 characters. '
						},
						regexp: {
						regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
						message: 'Password wont allow <>[]'
						}
					}
				},
				confirmpwd: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'pwd',
						message: 'Password and Confirm Password do not match'
					}
					}
				},speciality: {
					 validators: {
						 notEmpty: {
							message: 'Speciality is required'
						}
					}
				},
				mobile: {
				  validators: {
						 notEmpty: {
							message: 'Mobile Number is required'
						},
						regexp: {
						regexp:  /^[0-9]{10,14}$/,
						message:'Mobile Number must be 10 to 14 digits'
						}
					}
				},address: {
						validators: {
							notEmpty: {
								message: 'Address is required'
							},
							regexp: {
							regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
							message:'Address wont allow <> [] = % '
							}
						}
					},c_fee: {
						validators: {
							notEmpty: {
								message: 'Consultation fee is required'
							},
							regexp: {
							regexp:/^[0-9. ]+$/,
							message:'Consultation fee must be digits '
							}
						}
					},f_time: {
						validators: {
							notEmpty: {
								message: 'From time is required'
							}
						}
					},t_time: {
						validators: {
							notEmpty: {
								message: 'To time is required'
							}
						}
					},image: {
						   validators: {
							regexp: {
							regexp: "(.*?)\.(png|jpeg|Png|Jpeg|gif)$",
							message: 'Uploaded file is not a valid. Only png,jpeg,gif files are allowed'
							}
						}
					}
	        }
	    });
	
	});
</script>
