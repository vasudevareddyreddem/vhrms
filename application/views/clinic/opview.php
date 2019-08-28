<style>

</style>
<div class="content-wrapper bg-white">
	<section class="content-header mb-4">
		<h1>
       Patient Overview
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('patient/history'); ?>"><i class="fa fa-dashboard"></i> list</a></li>
			
			<li class="active">Patient Overview</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						 <div class="invoice-box">

		<table class="table table-bordered " cellpadding="0" cellspacing="0" >
            <tr >
                <td colspan="4" style="text-align:center;" >
                  <h4 > OP CONSULTATION RECEIPT</h4>
                </td>
            </tr> 
			<tr class="top">
				<td>Mr no </td>
				<th> <?php echo isset($p_list['p_id'])?$p_list['p_id']:''; ?></th>
				<td>Date </td>
				<th>  <?php echo isset($p_list['created_at'])?$p_list['created_at']:''; ?></th>
			</tr>
			<tr class="top">
				<td>OPD NO </td>
				<th> <?php echo isset($p_list['o_p_id'])?$p_list['o_p_id']:''; ?></th>
				<td>Phone No </td>
				<th>  <?php echo isset($p_list['mobile'])?$p_list['mobile']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Patient Name </td>
				<th> <?php echo isset($p_list['name'])?$p_list['name']:''; ?></th>
				<td>Age/Gender </td>
				<th> <?php echo isset($p_list['age'])?$p_list['age']:''; ?>/<?php echo isset($p_list['gender'])?$p_list['gender']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Consult Doctor </td>
				<th>  <?php echo isset($p_list['dname'])?$p_list['dname']:''; ?></th>
				<td>Address  </td>
				<th><?php echo isset($p_list['address'])?$p_list['address']:''; ?></th>
			</tr>
			
			<tr>
				<th colspan="4" style="padding:10px;margin-top:10px;"><i>Towards OP Consultation </i> <?php echo isset($p_list['c_fee'])?$p_list['c_fee']:''; ?></th>
				
			</tr>
        </table>
		
    </div>
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

