<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('profile'); ?>">Profile</a></li>
        <li class="active">edit profile</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit  profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="defaultForm" method="post" class="" action="<?php echo base_url('profile/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Name</label>
								<div class="">
									<input type="text" class="form-control" name="name" id="name" value="<?php echo isset($userdetails['name'])?$userdetails['name']:''; ?>" placeholder="Enter Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Email</label>
								<div class="">
									<input type="text" class="form-control" name="email" value="<?php echo isset($userdetails['email'])?$userdetails['email']:''; ?>" id="email" placeholder="Enter Email" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Phone Number</label>
								<div class="">
									<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo isset($userdetails['mobile'])?$userdetails['mobile']:''; ?>" placeholder="Enter Phone  number" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Address</label>
								<div class="">
									<input type="text" class="form-control" name="address" id="address" value="<?php echo isset($userdetails['address'])?$userdetails['address']:''; ?>" placeholder="Enter Address" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Profile Pic</label>
								<div class="">
									<input type="file" class="form-control" name="image" id="image" />
								</div>
							</div>
                        </div>
						
						
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-10">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update Profile</button>
								<a href="classes.php" type="submit" class="btn btn-warning" >Back</a>
                                
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
//       
        fields: {
            name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },mobile: {
                 validators: {
					notEmpty: {
						message: 'Phone  Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Phone  Number must be 10 to 14 digits'
					}
				
				}
            },
			address: {
                 validators: {
					notEmpty: {
						message: 'Address is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
				
				}
            },
			
			image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
        }
    });
});
</script>

