<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/buttons.dataTables.min.css">
</head>
<div class="content-wrapper">
	
	<section class="content ">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12 bg-white">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
					<div class="row table-responsive">
						<table id="example" class="display" style="width:100%">
        <thead>
		
            <tr>
                <th>Mr No</th>
                <th>Patient Name</th>
				<th>Phone Number</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Room Rent</th>
                <th>Lab charges</th>              
                <th>Medicine amount</th>
                <th>Total amount</th>
                <th>View</th>
            </tr>
			
        </thead>
        <tbody>
			<?php if(isset($p_list) && count($p_list)>0){ ?>
			   <?php foreach($p_list as $li){ ?>
				<tr>
					<th><?php echo isset($li['i_p_id'])?$li['i_p_id']:''; ?></th>
					<th><?php echo isset($li['name'])?$li['name']:''; ?></th>
					<th><?php echo isset($li['mobile'])?$li['mobile']:''; ?></th>
					<th><?php echo isset($li['age'])?$li['age']:''; ?></th>
					<th><?php echo isset($li['gender'])?$li['gender']:''; ?></th>
					<th><?php echo isset($li['rent'])?$li['rent']:''; ?></th>
					<th><?php echo isset($li['labchagers'])?$li['labchagers']:''; ?></th>
					<th><?php echo isset($li['medicine_amt'])?$li['medicine_amt']:''; ?></th>
					<th><?php echo isset($li['total_amt'])?$li['total_amt']:''; ?></th>
					<th><a href="<?php echo base_url('ip/view/'.base64_encode($li['i_p_id'])); ?>">View</a></th>
					
				</tr>
			   <?php } ?>
		    <?php } ?>
        </tbody>

    </table>	
	</div>
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
<script>

</script>

