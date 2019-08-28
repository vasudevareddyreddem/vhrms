<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
        Patient IP Reports
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active"> Patient IP Reports</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" autocomplete="off" target="_balnk" method="post" class="form-horizontal" action="<?php echo base_url('reports/ipprints'); ?>">
							<div class=" row ">
								
								<div class=" col-md-6 ">
								
									<div class="form-group ">
										<label class="col-lg-4 control-label">Type</label>
										<div class="col-md-8">
										<select onchange="f_hide(this.value)" class="form-control" name="type" id="type">
										<option value="">Select</option>
										<option value="all">All</option>
										<option value="patient">Patinet Wise</option>
										</select>
											
										</div>
									</div>
									<span id="d_hide">
									<div class="form-group ">
										<label class="col-lg-4 control-label">From Date</label>
										<div class="col-md-8">
										<input type="text" name="fdate" id="fdate" class="form-control datepicker">
											
										</div>
									</div>
									<div class="form-group ">
										<label class="col-lg-4 control-label">To Date</label>
										<div class="col-md-8">
											<input type="text" name="tdate" id="tdate" class="form-control datepicker">
										</div>
									</div>
									</span>
									<span id="p_hide">
									<div class="form-group ">
										<label class="col-lg-4 control-label">Mr no</label>
										<div class="col-md-8">
											<input type="text" name="mrno" id="mrno" class="form-control">
										</div>
									</div>
									</span>
									
									
									
									
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
	function f_hide(val){
		if(val=='all'){
			$('#d_hide').show();
			$('#p_hide').hide();
		}else{
				$('#p_hide').show();
			$('#d_hide').hide();
		}
		
	}
$(document).ready(function() {
		 $('#defaultForm').bootstrapValidator({
			fields: {
	            type: {
	               validators: {
						notEmpty: {
								message: 'Type is required'
						}
					}
	            },fdate: {
	               validators: {
						notEmpty: {
								message: 'From Date is required'
						}
					}
	            },mrno: {
	               validators: {
						notEmpty: {
								message: 'Mr no is required'
						}
					}
	            },
				tdate: {
	               validators: {
						notEmpty: {
								message: 'To Date is required'
						}
					}
	            }
				
	        }
	    });
		$('.datepicker').on('changeDate ', function(e) {
		$('#defaultForm').bootstrapValidator('revalidateField', 'fdate');
		});$('.datepicker').on('changeDate ', function(e) {
		$('#defaultForm').bootstrapValidator('revalidateField', 'tdate');
		});
	});
</script>
