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
                  <h4 > IP CONSULTATION RECEIPT</h4>
                </td>
            </tr> 
			<tr class="top">
				<td>Mr no </td>
				<th>: <?php echo isset($ip_details)?$ip_details['p_id']:''; ?></th>
				<td>Date </td>
				<th>: <?php echo isset($ip_details['created_at'])?$ip_details['created_at']:''; ?></th>
			</tr>
			<tr class="top">
				<td>OPD NO </td>
				<th>: <?php echo isset($ip_details['i_p_id'])?$ip_details['i_p_id']:''; ?></th>
				<td>Phone No </td>
				<th>: <?php echo isset($ip_details['mobile'])?$ip_details['mobile']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Patient Name </td>
				<th>: <?php echo isset($ip_details['name'])?$ip_details['name']:''; ?></th>
				<td>Age/Gender </td>
				<th>: <?php echo isset($ip_details['gender'])?$ip_details['gender']:''; ?>/<?php echo isset($ip_details['age'])?$ip_details['age']:''; ?></th>
			</tr>
			<tr class="top">
				
				<td>Address  </td>
				<th>: <?php echo isset($ip_details['address'])?$ip_details['address']:''; ?></th>
			</tr>
			<tr class="top">
				<td>Room Rent </td>
				<th>: <?php echo isset($ip_details['rent'])?$ip_details['rent']:''; ?></th>
				<td>Lab charges  </td>
				<th>: <?php echo isset($ip_details['labchagers'])?$ip_details['labchagers']:''; ?></th>
			</tr>
			<tr class="top">
				<td>
				Medicine amount
				 </td>
				<th>: <?php echo isset($ip_details['medicine_amt'])?$ip_details['medicine_amt']:''; ?></th>
				<td>
				Total amount
				  </td>
				<th>: <?php echo isset($ip_details['total_amt'])?$ip_details['total_amt']:''; ?></th>
			</tr>
			
			<tr>
				<th colspan="4" style="padding:10px;margin-top:10px;"><i>Grand Total   :  </i> <?php echo isset($ip_details['total_amt'])?$ip_details['total_amt']+$ip_details['c_fee']:''; ?></th>
				
			</tr>
			
        </table>
		
		
		
		
    </div>
</body>
</html>
