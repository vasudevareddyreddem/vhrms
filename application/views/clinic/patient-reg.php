<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Patient Registration
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('patient'); ?>"><i class="fa fa-dashboard"></i> list</a></li>
			
			<li class="active">Patient Registration</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('patient/regpost'); ?>">
							<div class=" row ">
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" placeholder="Enter Name" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Phone Number</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="mobile" placeholder="Enter phone number" />
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">age</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="age" placeholder="Enter age" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Gender</label>
										<div class="col-md-8">
											<label class="radio-inline">
												<input type="radio" name="gender" value="Male">Male</label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="Female">Female</label>
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Address</label>
										<div class="col-md-8">
											<textarea class="form-control" name="address"></textarea>
										</div>
									</div>
									
								</div>
								
								
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Submit</button>
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
	$('#defaultForm').bootstrapValidator({
	
	        fields: {
	            name: {
	                validators: {
						notEmpty: {
							message: 'Name required'
						},
						regexp: {
						regexp: /^[a-zA-Z0-9. ]+$/,
						message: 'Name can only consist of alphanumeric, space and dot'
						}
					}
	            },
				mobile: {
                 validators: {
					notEmpty: {
						message: 'Phone Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Phone Number must be 10 to 14 digits'
					}
				
				}
            },age: {
                 validators: {
					notEmpty: {
							message: 'Age is required'
						},
						regexp: {
						regexp: /^[0-9a-z ]+$/,
						message: 'Age can only consist of alphanumeric, space and dot'
						}
				
				}
            },gender: {
                validators: {
					notEmpty: {
						message: 'Gender is required'
					}
				}
            },address: {
                validators: {
					notEmpty: {
						message: 'Address is required'
					}
				}
            }
	        }
	    });
	});
</script>
