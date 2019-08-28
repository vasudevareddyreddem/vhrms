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
		<table>
				<tr>
					<td colspan="10" style="text-align:center;">
						<h3>Doctor wise Patients list</h3>
					</td>
				 </tr>
				 <tr >
					
							<th>Mr No</th>
							<th>OPD NO</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Address</th>
							<th>Doctor</th>
							<th>Fee</th>
							<th>Created Date & Time</th>
					
				 </tr>
				
				<?php if(isset($patient_list) && count($patient_list)>0){ ?>
					<?php $total='';foreach($patient_list as $li){ ?>
					<tr >
							<td> <?php echo isset($li['p_id'])?$li['p_id']:''; ?></td>
							<td> <?php echo isset($li['o_p_id'])?$li['o_p_id']:''; ?></td>
							<td> <?php echo isset($li['name'])?$li['name']:''; ?></td>
							<td> <?php echo isset($li['mobile'])?$li['mobile']:''; ?></td>
							<td> <?php echo isset($li['gender'])?$li['gender']:''; ?></td>
							<td> <?php echo isset($li['age'])?$li['age']:''; ?></td>
							<td> <?php echo isset($li['address'])?$li['address']:''; ?></td>
							<td> <?php echo isset($li['dname'])?$li['dname']:''; ?></td>
							<td> <?php echo isset($li['c_fee'])?$li['c_fee']:''; ?></td>
							<td> <?php echo isset($li['created_at'])?$li['created_at']:''; ?></td>

					</tr> 
					<?php $total+=$li['c_fee']; ?>
					<?php } ?>
					  <tr>
						<th >Patients count </th>
						<td> <?php echo isset($patient_list)?count($patient_list):''; ?></td>
						<th colspan="5">&nbsp; </th>
						<th> Total : </th>
						
						<td> <?php echo isset($total)?$total:''; ?></td>
						<th colspan="1">&nbsp; </th>
					  </tr>
				<?php } ?>
				 
								 
							
        </table>
    </div>
</body>
</html>
