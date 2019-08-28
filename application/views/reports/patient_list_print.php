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
					<td colspan="7" style="text-align:center;">
						<h3>Patients list</h3>
					</td>
				 </tr>
				 <tr >
					
							<th>Mr No</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Address</th>
							<th>Created Date & Time</th>
					
				 </tr>
				
				<?php if(isset($patient_list) && count($patient_list)>0){ ?>
					<?php $total='';foreach($patient_list as $li){ ?>
					<tr >
							<td> <?php echo isset($li['p_id'])?$li['p_id']:''; ?></td>
							<td> <?php echo isset($li['name'])?$li['name']:''; ?></td>
							<td> <?php echo isset($li['mobile'])?$li['mobile']:''; ?></td>
							<td> <?php echo isset($li['gender'])?$li['gender']:''; ?></td>
							<td> <?php echo isset($li['age'])?$li['age']:''; ?></td>
							<td> <?php echo isset($li['address'])?$li['address']:''; ?></td>
							<td> <?php echo isset($li['created_at'])?$li['created_at']:''; ?></td>

					</tr> 
					<?php } ?>
				<?php } ?>
				 
								 
							
        </table>
    </div>
</body>
</html>
