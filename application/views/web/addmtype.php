<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
		<?php echo isset($t_details['m_t_id'])?'Edit Medicine Type':' Add Medicine Type'; ?>
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('medicine/typelist'); ?>"><i class="fa fa-dashboard"></i> List</a></li>
			<li class="active">Generic</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('medicine/typeaddpost'); ?>">
							<input type="hidden" name="m_t_id" value="<?php echo isset($t_details['m_t_id'])?$t_details['m_t_id']:''; ?>">
							<div class=" row ">
								<div class=" col-md-6 ">
									<div class="form-group ">
										<label class="col-lg-4 control-label">Medicine Type</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" value="<?php echo isset($t_details['t_name'])?$t_details['t_name']:''; ?>" placeholder="Enter Medicine Type" />
										</div>
									</div>
									<div class="form-group ">
										<label class="col-lg-4 control-label">Description</label>
										<div class="col-md-8">
											<textarea type="text" class="form-control" name="description"><?php echo isset($t_details['description'])?$t_details['description']:''; ?></textarea>
										</div>
									</div>
									<div class="form-group ">
										<label class="col-lg-4 control-label">User Code</label>
										<div class="col-md-8">
											<input type="password" class="form-control" name="u_code" placeholder="User Code" />
										</div>
									</div>
								</div>
								
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-6 text-center">
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up"><?php echo isset($t_details['m_t_id'])?'Update':'Add'; ?></button>
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
							message: 'Medicine Type required'
						},
						regexp: {
						regexp: /^[a-zA-Z0-9. ]+$/,
						message: 'Medicine Type can only consist of alphanumeric, space and dot'
						}
					}
	            },
				description: {
	                validators: {
						notEmpty: {
							message: 'Description required'
						}
					}
	            },
	            u_code: {
	                  validators: {
						notEmpty: {
							message: 'User Code is required'
						},
						regexp: {
						regexp: /^[0-9. ]+$/,
						message: 'User Code can only digits'
						}
					}
	            }
	        }
	    });
	
	});
</script>
