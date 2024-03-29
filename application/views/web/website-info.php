<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
		Website Details
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Website Details</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('website/addwebsite_d_post'); ?>" enctype="multipart/form-data">
							
						<div class=" row ">
							<div class=" col-md-12 ">
							<div class="col-md-6">
							<div class="form-group">
									<label class="col-lg-4 control-label">Register name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="name" value="<?php echo isset($h_detail['name'])?$h_detail['name']:'';?>" placeholder="Enter Website Name" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Phone</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="mobile" value="<?php echo isset($h_detail['mobile'])?$h_detail['mobile']:'';?>" placeholder="Enter Phone number" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Email</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="email" value="<?php echo isset($h_detail['email'])?$h_detail['email']:'';?>" placeholder="Enter email id" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Mrn No</label>
									<div class="col-md-8">
										<input type="text" class="form-control" readonly="true" name="mrn_no" value="<?php echo isset($h_detail['w_id'])?$h_detail['w_id']:'';?>" placeholder="Enter Mrn No" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Website Address</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="website" value="<?php echo isset($h_detail['website'])?$h_detail['website']:'';?>" placeholder="Enter Website Address" />
									</div>
								</div>
						  <div class="form-group">
							<label class="col-lg-4 control-label">Image</label>
							<div class="col-lg-8">
							<input type="file" class="form-control" name="image"  />
						  </div>
						  </div>
						  <div class="form-group">
									<label class="col-lg-4 control-label">Address</label>
									<div class="col-md-8">
										<textarea class="form-control" name="address"><?php echo isset($h_detail['address'])?$h_detail['address']:'';?></textarea>
									</div>
								</div>
					
								
						</div>
								
						</div>
				
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Update</button>
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
							message: 'Name is required'
						}
					}
	            },image: {
	               validators: {
						regexp: {
						regexp: "(.*?)\.(Png|png|jpeg|Jpeg|jpg|Jpg|Jpg)$",
						message: 'Uploaded file is not a valid. Only Png,jpeg,Jpg,Jpg files are allowed'
						}
					}
	            },mobile: {
	               validators: {
						notEmpty: {
							message: 'Phone Number is required'
						},
						regexp: {
						regexp:  /^[0-9]{10,14}$/,
						message:'Phone Number must be 10 to 14 digits'
						}
					
					}
	            },website: {
	               validators: {
						notEmpty: {
							message: 'Website Address is required'
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
				address: {
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
