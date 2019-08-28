<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Day wise collection
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Day wise collection</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" target="_blank" method="post" class="form-horizontal" action="<?php echo base_url('reports/daycollectionprint'); ?>">
							<div class=" row ">
								
								<div class=" col-md-6 ">
									<div class="form-group ">
										<label class="col-lg-4 control-label">Date</label>
										<div class="col-md-8">
										<input type="text" name="fdate" id="fdate" class="form-control datepicker">
										</div>
									</div>
								</div>
								
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-6 text-center">
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Go</button>
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
	            fdate: {
	               validators: {
						notEmpty: {
								message: 'Date is required'
						}
					}
	            }
	        }
	    });
		$('.datepicker').on('changeDate ', function(e) {
		$('#defaultForm').bootstrapValidator('revalidateField', 'fdate');
		});
	});
</script>
