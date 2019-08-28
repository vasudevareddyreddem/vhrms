<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Medicine Type  List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('medicine/type'); ?>"><i class="fa fa-dashboard"></i> Add</a></li>
			<li class="active">Medicine Type  list</li>
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
							<th>Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($t_list) && count($t_list)>0){ ?>
					<?php foreach($t_list as $li){ ?>
						<tr>
							<td><?php echo isset($li['t_name'])?$li['t_name']:''; ?></td>
							<td><?php if($li['t_status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
							<td> 
								<a href="<?php echo base_url('medicine/typestatus/'.base64_encode($li['m_t_id']).'/'.base64_encode($li['t_status'])); ?>" class="confirmation"><i class="fa fa-pencil btn btn-success"></i></a>
								<a href="<?php echo base_url('medicine/type/'.base64_encode($li['m_t_id'])); ?>"  data-toggle="tooltip" title="Edit"><i class="fa fa-edit btn btn-warning"></i></a>
								<a href="<?php echo base_url('medicine/typedelete/'.base64_encode($li['m_t_id'])); ?>" data-toggle="tooltip" title="Delete" class="confirmation"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
							
						</tr>
					<?php } ?>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Status</th>
							<th>Action</th>
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