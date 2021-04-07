<?php
include "../connection.php";
if(is_numeric($_GET['Policy_Num'])){    
$sql = "select * from policy_data where Policy_Num = '".$_GET['Policy_Num']."'";    
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_object($result);
$sql1 = "select * from customerr where Customer_Num ='".$row->Customer_Num."'";  
// echo $sql1;exit;  
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_object($result1);
$sql2 = "select * from agent_new where Agent_code = '$row->Agent_code'";    
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_object($result2);
$sql3 = "select * from premium where Policy_Num = $row->Policy_Num";    
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_object($result3);
}

?>
<!-- <html>    
    <head>    
        <title>Policy Information</title>  
		<link href = "style3.css" type = "text/css" rel = "stylesheet" />  
    </head>    
    <body>    
        <link href = "policy/regg2.css" type = "text/css" rel = "stylesheet" />
		<ul>
			<li><a href="policy/modified1.php"> Back to Policy datas</a></li>
			
		</ul>
		<center>
		<h1> Policy Data </h1> -->
		<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="view-port" content="width=device-width initial-scale=1">
    <title>Policy Information</title>  
    <!-- <link href = "regg.css" type = "text/css" rel = "stylesheet" />
    <link href = "../style3.css" type = "text/css" rel = "stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">   
</head>    
    <body style="line-height: 1;">    
		<!-- <link href = "regg.css" type = "text/css" rel = "stylesheet" />  
	    <link href = "../style1.css" type = "text/css" rel = "stylesheet" />  -->
		<ul>
			<li  class="submit-btn" style="float:left; text-decoration: none; "><a href="../table/admin1.php"  style=" color: #ffffff;"> Back to Admin Page</a></li>
			<li class="submit-btn" style="text-decoration: none; float:right;"><a href="../table/modified123.php" style=" color: #ffffff;"> Back to Policy Data</a></li>
			<!-- <a href="../login/logout.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: red; transition: .5s; float:right;">LOG OUT</a> -->
		</ul>		
		<h1><center>Policy Information</center></h1>
		
        <table class="table table-striped table-hover table-bordered" width = "90%" height = "80%" border="0" cellspacing = "1" cellpadding = "3" align="center">
            <tr valign = "top" align = "center">
                <th>Policy Number:<i> <?php echo "$row->Policy_Num";?></i></th>
				<th>Agent Code: <i><?php echo "$row->Agent_code";?></i></th>
                <th>Customer Number:<i> <?php echo "$row1->Customer_Num";?></i></th>
				<th>Customer Name: <i><?php echo "$row1->First_Name $row1->Middle_Name $row1->Last_Name";?></i></th>				
			</tr>
			
			<tr valign = "top" align = "center">
				<th>Mother:<i> <?php echo "$row1->Mother_Name";?>[<?php if($row1->Mother_Status=='D'){echo "Dead";} else{echo "Alive";}?>]</i></th>
				<th>Father:<i> <?php echo "$row1->Father_Name";?>[<?php if($row1->Father_Status=='D'){echo "Dead";} else{echo "Alive";}?>]</i></th>
				<th>Marital Status:<i> <?php if($row1->Marital_Status=='M'){echo "Married";} else{echo "UnMarried";}?></i></th>
				<th>Spouse:<i> <?php echo "$row1->Spouse";?></i></th>
			</tr>
			<tr valign = "top" align = "center">
				<th>Address:<i><?php echo "$row1->Address";?></i></th>
				<th>PIN:<i> <?php echo "$row1->Pincode";?></i></th>
				<th>Contact:<i> <?php echo "$row1->Contact_Number";?></i></th>
				<th>Date Of Contact:<i> <?php echo "$row->DOC";?></i></th>
			</tr>
			<!-- DOC Product Sum_Assured Pay_Period Ins_Period -->
				<tr valign = "top" align = "center">
					
					<th>Product: <i><?php echo "$row->Product";?></i></th>
					<th>Sum Assured:<i> <?php echo "$row->Sum_Assured";?> Rs.</i></th>
					<th>Payment Period: <i><?php echo "$row->Pay_Period";?> Yrs.</i></th>
					<th>Insurance Period: <i><?php echo "$row->Ins_Period";?> Yrs.</i></th>
									</tr>
			</table>
		</center>
     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/custom.js"></script>	
    </body>    
</html> 