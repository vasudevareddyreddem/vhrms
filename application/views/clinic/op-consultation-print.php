<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($page_title)?$page_title:''; ?></title>
    
    <style>
	*{
		padding:0px;
		margin:0px;
	}
	  table{
		width:100%;
	}
    table {
  border-collapse: collapse;
}


table, th, td {
 border: 1px solid black;
  text-align:left;
  padding:5px ;
}
 .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table style="border:0px ">
            <tr class="top">
                <td colspan="2" style="width:250px;border-right:0px">
                     <img src="<?php echo base_url('assets/logo/'.$p_hos['logo']); ?>" style="width:100%; max-height:100px;">
                </td>
				<td style="text-align:left;border-left:0px;">
				   <h1 ><?php echo isset($p_hos['name'])?$p_hos['name']:''; ?></h1>
				   <p><?php echo isset($p_hos['address'])?$p_hos['address']:''; ?></p>
				</td>
            </tr>
        </table>
		<table cellpadding="0" cellspacing="0" style="border:1px solid #aaa;border-bottom:0px solid #fff;">
            <tr >
                <td colspan="4" style="text-align:center;" >
                  <h4 > OP CONSULTATION RECEIPT</h4>
                </td>
            </tr> 
			<tr class="top">
				<td>Mr no </td>
				<th>: <?php echo isset($op_details)?$op_details['p_id']:''; ?></th>
				<td>Date </td>
				<th>: <?php echo isset($op_details['created_at'])?$op_details['created_at']:''; ?></th>
			</tr>
			<tr class="top">
				<td>OPD NO </td>
				<th>: <?php echo isset($op_details['o_p_id'])?$op_details['o_p_id']:''; ?></th>
				<td>Phone No </td>
				<th>: <?php echo isset($op_details['mobile'])?$op_details['mobile']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Patient Name </td>
				<th>: <?php echo isset($op_details['name'])?$op_details['name']:''; ?></th>
				<td>Age/Gender </td>
				<th>: <?php echo isset($op_details['gender'])?$op_details['gender']:''; ?>/<?php echo isset($op_details['age'])?$op_details['age']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Consult Doctor </td>
				<th>: <?php echo isset($op_details['dname'])?$op_details['dname']:''; ?></th>
				<td>Address  </td>
				<th>: <?php echo isset($op_details['address'])?$op_details['address']:''; ?></th>
			</tr>
			
			<tr>
				<th colspan="<?php if(isset($op_details['f_d']) && $op_details['f_d']==1){echo "2";}else{ echo "4"; } ?>" style="padding:10px;margin-top:10px;"><i>Towards OP Consultation </i> <?php echo isset($op_details['c_fee'])?$op_details['c_fee']:''; ?></th>
				<?php if(isset($op_details['f_d']) && $op_details['f_d']==1){ ?>
				
					<td colspan="2" style="padding:10px;margin-top:10px;"><i>Free Consultation upto  :  </i><b> <?php echo date('d M Y', strtotime($op_details['free_days'].' days')); ?></b></td>
					
				
			<?php } ?>
			</tr>
			
        </table>
		
		
		
    </div>
</body>
</html>