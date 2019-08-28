<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Patients  List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('patient/registration'); ?>"><i class="fa fa-dashboard"></i> Add</a></li>
			<li class="active">Patients  list</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
		
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Mr No</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Created Date & Time</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($p_list) && count($p_list)>0){ ?>
					<?php foreach($p_list as $li){ ?>
						<tr>
							<td><?php echo isset($li['p_id'])?$li['p_id']:''; ?></td>
							<td><?php echo isset($li['name'])?$li['name']:''; ?></td>
							<td><?php echo isset($li['mobile'])?$li['mobile']:''; ?></td>
							<td><?php echo isset($li['gender'])?$li['gender']:''; ?></td>
							<td><?php echo isset($li['age'])?$li['age']:''; ?></td>
							<td><?php echo isset($li['created_at'])?$li['created_at']:''; ?></td>
							
							
						</tr>
					<?php } ?>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Mr No</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Created Date & Time</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script>
$(document).ready(function() {
      $('.confirmation').on('click', function() {
        return confirm('Are you sure?');
      });
    });
	$(function () {
	    $("#example1").DataTable();	   
	  });
</script>