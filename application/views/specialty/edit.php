<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     Specialty Edit
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('specialty'); ?>"><i class="fa fa-dashboard"></i> List</a></li>
			<li class="active">Specialty edit</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('specialty/editpost'); ?>" autocomplete="off">
						<input  type="hidden" name="s_id"  value="<?php echo isset($s['s_id'])?$s['s_id']:'';?>">
							<div class=" row ">
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Specialty  name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="s_name" value="<?php echo isset($s['name'])?$s['name']:'';?>" placeholder="Enter Specialty name" />
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
	            s_name: {
	                validators: {
	                    notEmpty: {
	                        message: 'Specialty name is required'
	                    }
	                }
	            }
	        }
	    });
	});
</script>