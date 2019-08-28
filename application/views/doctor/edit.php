<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Edit Doctor 
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
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('doctor/editpost'); ?>" enctype="multipart/form-data">
							<input type="hidden" name="d_id" value="<?php echo isset($d['d_id'])?$d['d_id']:''; ?>">
							<input type="hidden" name="a_id" value="<?php echo isset($d['a_id'])?$d['a_id']:''; ?>">
						<div class=" row ">
							<div class=" col-md-12 ">
								 <div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Doctor name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="name" value="<?php echo isset($d['name'])?$d['name']:''; ?>"  placeholder="Enter Doctor name" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Email</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="email" value="<?php echo isset($d['email'])?$d['email']:''; ?>" placeholder="Enter Doctor email" />
									</div>
								</div> 
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Speciality</label>
									<div class="col-md-8">
										<select class="form-control" name="speciality">
											<option value="">Select</option>
											<?php if(isset($s_list) && count($s_list)>0){ ?>
											<?php foreach($s_list as $li){ ?>
												<?php if($li['s_id']==$d['speciality']){ ?>
													<option selected value="<?php echo $li['s_id']; ?>"><?php echo $li['name']; ?></option>
												<?php }else{ ?>
													<option value="<?php echo $li['s_id']; ?>"><?php echo $li['name']; ?></option>
												<?php } ?>												
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Phone Number</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="mobile" value="<?php echo isset($d['mobile'])?$d['mobile']:''; ?>" placeholder="Enter Phone Number" />
									</div>
								</div>
									<div class="form-group col-md-6">
									<label class="col-lg-4 control-label" >Address</label>
									<div class="col-md-8">
									<textarea class="form-control" name="address"><?php echo isset($d['address'])?$d['address']:''; ?></textarea>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Consultation fee</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="c_fee" value="<?php echo isset($d['c_fee'])?$d['c_fee']:''; ?>" placeholder="Enter Consultation fee" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Consultation Free day</label>
									<div class="col-md-8">
										<select class="form-control" name="free_days">
											<option value="">Select</option>
											<option value="1" <?php if($d['free_days']==1){ echo "selected";} ?>>1 Day</option>
											<option value="2" <?php if($d['free_days']==2){ echo "selected";} ?>>2 Day</option>
											<option value="3" <?php if($d['free_days']==3){ echo "selected";} ?>>3 Day</option>
											<option value="4" <?php if($d['free_days']==4){ echo "selected";} ?>>4 Day</option>
											<option value="5" <?php if($d['free_days']==5){ echo "selected";} ?>>5 Day</option>
											<option value="6" <?php if($d['free_days']==6){ echo "selected";} ?>>6 Day</option>
											<option value="7" <?php if($d['free_days']==7){ echo "selected";} ?>>7 Day</option>
											<option value="8" <?php if($d['free_days']==8){ echo "selected";} ?>>8 Day</option>
											<option value="9" <?php if($d['free_days']==9){ echo "selected";} ?>>9 Day</option>
											<option value="10" <?php if($d['free_days']==10){ echo "selected";} ?>>10 Day</option>
											<option value="11" <?php if($d['free_days']==11){ echo "selected";} ?>>11 Day</option>											
											<option value="12" <?php if($d['free_days']==12){ echo "selected";} ?>>12 Day</option>											
											<option value="13" <?php if($d['free_days']==13){ echo "selected";} ?>>13 Day</option>											
											<option value="14" <?php if($d['free_days']==14){ echo "selected";} ?>>14 Day</option>											
											<option value="15" <?php if($d['free_days']==15){ echo "selected";} ?>>15 Day</option>											
											<option value="16" <?php if($d['free_days']==16){ echo "selected";} ?>>16 Day</option>											
											<option value="17" <?php if($d['free_days']==17){ echo "selected";} ?>>17 Day</option>											
											<option value="18" <?php if($d['free_days']==18){ echo "selected";} ?>>18 Day</option>											
											<option value="19" <?php if($d['free_days']==19){ echo "selected";} ?>>19 Day</option>											
											<option value="20" <?php if($d['free_days']==20){ echo "selected";} ?>>20 Day</option>											
											<option value="21" <?php if($d['free_days']==21){ echo "selected";} ?>>21 Day</option>											
											<option value="22" <?php if($d['free_days']==22){ echo "selected";} ?>>22 Day</option>											
											<option value="23" <?php if($d['free_days']==23){ echo "selected";} ?>>23 Day</option>											
											<option value="24" <?php if($d['free_days']==24){ echo "selected";} ?>>24 Day</option>											
											<option value="25" <?php if($d['free_days']==25){ echo "selected";} ?>>25 Day</option>											
											<option value="26" <?php if($d['free_days']==26){ echo "selected";} ?>>26 Day</option>											
											<option value="27" <?php if($d['free_days']==27){ echo "selected";} ?>>27 Day</option>											
											<option value="28" <?php if($d['free_days']==28){ echo "selected";} ?>>28 Day</option>											
											<option value="29" <?php if($d['free_days']==29){ echo "selected";} ?>>29 Day</option>											
											<option value="30" <?php if($d['free_days']==30){ echo "selected";} ?>>30 Day</option>												
										</select>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">From</label>
									<div class="col-md-8 bootstrap-timepicker">
									<input type="text" class="form-control timepicker" name="f_time" value="<?php echo isset($d['f_time'])?$d['f_time']:''; ?>"  />
									</div>
								</div>	
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">To</label>
									<div class="col-md-8 bootstrap-timepicker">
									<input type="text" class="form-control timepicker" name="t_time" value="<?php echo isset($d['t_time'])?$d['t_time']:''; ?>"  />
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
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Update Doctor</button>
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
$(document).ready(function(){$(".timepicker").timepicker({showInputs:!1}),$("#defaultForm").bootstrapValidator({fields:{name:{validators:{notEmpty:{message:"Doctor name is required"},regexp:{regexp:/^[a-zA-Z0-9. ]+$/,message:"Doctor name can only consist of alphanumeric, space and dot"}}},email:{validators:{notEmpty:{message:"Email is required"},regexp:{regexp:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,message:"Please enter a valid email address. For example johndoe@domain.com."}}},pwd:{validators:{notEmpty:{message:"Password is required"},stringLength:{min:6,message:"Password  must be at least 6 characters. "},regexp:{regexp:/^[ A-Za-z0-9_@.,\/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,message:"Password wont allow <>[]"}}},confirmpwd:{validators:{notEmpty:{message:"Confirm Password is required"},identical:{field:"pwd",message:"Password and Confirm Password do not match"}}},speciality:{validators:{notEmpty:{message:"Speciality is required"}}},mobile:{validators:{notEmpty:{message:"Mobile Number is required"},regexp:{regexp:/^[0-9]{10,14}$/,message:"Mobile Number must be 10 to 14 digits"}}},address:{validators:{notEmpty:{message:"Address is required"},regexp:{regexp:/^[ A-Za-z0-9_@.,\/!;:}{@#&`~"\\|^?$*)(_+-]*$/,message:"Address wont allow <> [] = % "}}},c_fee:{validators:{notEmpty:{message:"Consultation fee is required"},regexp:{regexp:/^[0-9. ]+$/,message:"Consultation fee must be digits "}}},no_of_visits:{validators:{notEmpty:{message:"No of visits is required"},regexp:{regexp:/^[0-9. ]+$/,message:"No of visits must be digits "}}},free_days:{validators:{notEmpty:{message:"Free days  is required"},regexp:{regexp:/^[0-9. ]+$/,message:"Free days must be digits "}}},s_fee:{validators:{notEmpty:{message:"Special fee is required"},regexp:{regexp:/^[0-9. ]+$/,message:"Special fee must be digits "}}},ip_c_fee:{validators:{notEmpty:{message:"Ip consultation fee is required"},regexp:{regexp:/^[0-9. ]+$/,message:"Ip consultation fee must be digits "}}},c_doctor:{validators:{notEmpty:{message:"Consultant doctor is required"}}},f_time:{validators:{notEmpty:{message:"From time is required"}}},t_time:{validators:{notEmpty:{message:"To time is required"}}},image:{validators:{regexp:{regexp:"(.*?).(png|jpeg|Png||jpg|Jpeg|gif)$",message:"Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed"}}}}})});
	</script>
