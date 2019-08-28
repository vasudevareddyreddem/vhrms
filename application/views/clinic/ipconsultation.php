<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Add Consultation
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Consultation</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" method="post" autocomplete="off" class="form-horizontal" action="<?Php echo base_url('ip/consultationpost'); ?>">
							<div class=" row ">
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<div class="col-md-8"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-6 control-label"></label>
										<div class="col-md-6">	<a class="btn btn-primary btn-block text-white" href="<?php echo base_url('ip/history'); ?>">History</a>
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Mr No</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="mrno" id="mrno" onkeyup="get_patient_detail(this.value);" value="<?php echo isset($ip_details['p_id'])?$ip_details['p_id']:''; ?>" placeholder="Enter Mr No" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Patient Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="p_name" id="p_name" value="<?php echo isset($ip_details['name'])?$ip_details['name']:''; ?>" placeholder="Enter patient name" />
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">age</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="age" name="age" value="<?php echo isset($ip_details['age'])?$ip_details['age']:''; ?>" placeholder="Enter age" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Gender</label>
										<div class="col-md-8">
											<label class="radio-inline">
												<input type="radio" name="gender" id="male" value="Male" <?php if( isset($ip_details['gender']) && $ip_details['gender']=='Male'){ echo "checked"; } ?> >Male</label>
											<label class="radio-inline">
												<input type="radio" name="gender" id="female" value="Female" <?php if( isset($ip_details['gender']) && $ip_details['gender']=='Female'){ echo "checked"; } ?>>Female</label>
										</div>
									</div>
								</div>
								<!--<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Doctor Name</label>
										<div class="col-md-8">
											<select class="form-control" name="doct_id" id="doct_id" onchange="get_doctor_fee(this.value)">
												<option value="">Select</option>
												<?php if(isset($d_list) && count($d_list)>0){ ?>
													<?php foreach($d_list as $li){ ?>
														<?php if($ip_details['doct_id']==$li['d_id']){ ?>
															<option selected value="<?php echo $li['d_id']; ?>"><?php echo $li['name']; ?></option>
														<?php }else{ ?>
															<option value="<?php echo $li['d_id']; ?>"><?php echo $li['name']; ?></option>
														<?php }?>													
													<?php } ?>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Doctor Amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="c_fee" id="c_fee" value="<?php echo isset($ip_details['c_fee'])?$ip_details['c_fee']:''; ?>" placeholder="Enter Doctor Amount" />
										</div>
									</div>
								</div>-->
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Phone Number</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo isset($ip_details['mobile'])?$ip_details['mobile']:''; ?>" placeholder="Enter Phone" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Address</label>
										<div class="col-md-8">
											<textarea class="form-control" name="address" id="address"><?php echo isset($ip_details['address'])?$ip_details['address']:''; ?></textarea>
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Room Rent</label>
										<div class="col-md-8">
											<input type="text" class="form-control" onkeyup="sun_amt()" id="rent" name="rent" value="<?php echo isset($ip_details['rent'])?$ip_details['rent']:''; ?>" placeholder="Enter rent" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Lab charges</label>
											<div class="col-md-8">
											<input type="text" class="form-control" onkeyup="sun_amt()" id="labchagers" name="labchagers" value="<?php echo isset($ip_details['labchagers'])?$ip_details['labchagers']:''; ?>" placeholder="Enter lab chagers" />
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Medicine amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" onkeyup="sun_amt()" id="medicine_amt" name="medicine_amt" value="<?php echo isset($ip_details['medicine_amt'])?$ip_details['medicine_amt']:''; ?>" placeholder="Enter Medicine amount" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Total amount</label>
											<div class="col-md-8">
											<input type="text" class="form-control" id="total_amt" name="total_amt" value="<?php echo isset($ip_details['total_amt'])?$ip_details['total_amt']:''; ?>" placeholder="Enter Chagers" />
										</div>
									</div>
								</div>
								<?php if(isset($ip_details['i_p_id']) && $ip_details['i_p_id']!=''){ ?>
									
								<?php }else { ?>
									<div class="col-md-6 text-right" >
											<button type="submit" class="btn btn-success">Submit</button>
											</div>
								<?php } ?>
								
								
							</div>
						</form>
					</div>
					<div class=" row ">
						<div class=" col-md-6 "></div>
					</div>
				
					
					<?php if(isset($ip_details['i_p_id']) && $ip_details['i_p_id']!=''){ ?>
					<form  id="consult_form" action="<?php echo base_url('ip/ip_consultation'); ?>" method="post" target="_blank">
						<input type="hidden" name="i_p_id" value="<?php echo isset($ip_details['i_p_id'])?$ip_details['i_p_id']:''; ?>">	
					
							<div class=" text-right col-md-12">
								<button style="z-index:2000" type="button" onclick="consultant_form();" class="btn btn-warning" name="signup" value="Sign up">Print Consultation</button>
							</div>
					
					</form>
					<div class="clearfix">&nbsp;</div>
					<?php } ?>
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
function sun_amt(){
	var rent=$('#rent').val();
	var labchagers=$('#labchagers').val();
	var medicine_amt=$('#medicine_amt').val();
	var bal=((rent*1)+(labchagers*1)+(medicine_amt*1));
	$('#total_amt').val('');
	$('#total_amt').val(bal);
}
function consultant_form() {
	window.location="<?php echo base_url('ip'); ?>";
  document.getElementById("consult_form").submit();
}
 $('#defaultForm').bootstrapValidator({
	
	        fields: {
	            p_name: {
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
				age: {
				  validators: {
						notEmpty: {
							message: 'Age is required'
						},
						regexp: {
						regexp: /^[0-9]+$/,
						message: 'Age must be digits'
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
            },gender: {
                 validators: {
					notEmpty: {
						message: 'Gender is required'
					}
				
				}
            },doct_id: {
                 validators: {
					notEmpty: {
						message: 'Doctor Name is required'
					}
				
				}
            },rent: {
                 validators: {
					notEmpty: {
						message: 'Rent is required'
					}
				
				}
            },labchagers: {
                 validators: {
					notEmpty: {
						message: 'Lab charges is required'
					}
				
				}
            },medicine_amt: {
                 validators: {
					notEmpty: {
						message: 'Medicine amount is required'
					}
				
				}
            },total_amt: {
                 validators: {
					notEmpty: {
						message: 'Total amount is required'
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
function get_patient_detail(id){
	jQuery.ajax({
		url: "<?php echo base_url('patient/get_patient_detail');?>",
		data: {
			p_id: id,
			},
		dataType: 'json',
		type: 'POST',
		success: function (data){
			if(data.msg==1){
				 $('#p_name').empty();
				 $('#p_name').val(data.det.name); 
				 $('#age').empty();
				 $('#age').val(data.det.age);  
				 $('#mobile').empty();
				 $('#mobile').val(data.det.mobile);
				 $('#address').empty();
				 $('#address').val(data.det.address); 
				if(data.det.gender=='Male'){
					document.getElementById("male").checked = true;
				}else{
					document.getElementById("female").checked = true;
				}				 
				}
			}
		});
	
}
function get_doctor_fee(id){
	jQuery.ajax({
		url: "<?php echo base_url('patient/get_doctor_fee');?>",
		data: {
			d_id: id,
			},
		dataType: 'json',
		type: 'POST',
		success: function (data){
			if(data.msg==1){
				 $('#c_fee').empty();
				 $('#c_fee').val(data.c_fee);                      
				}
			}
		});
	
}

</script>
