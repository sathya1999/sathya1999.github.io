<?php    
    
include "../connection.php";        
$sql = "select * from customerr";    
$result = mysqli_query($conn,$sql);    
?>    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="view-port" content="width=device-width initial-scale=1">
    <title>Registration Form</title>  
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
			<a href="../client/excel.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: green; transition: .5s;float:left;">DOWNLOAD</a>
			<li class="submit-btn" style="text-decoration: none; float:right;"><a href="admin1.php" style=" color: #ffffff;"> Back to Admin page</a></li>
			<!-- <a href="../login/logout.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: red; transition: .5s; float:right;">LOG OUT</a> -->
		</ul>		
		<h1 style="font-family: auto;
    font-size: 45px;"><center>Customer Data</center></h1>
		
		<table class="table table-striped table-hover table-bordered" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
			<thead>
            <tr>    
                <th>Customer Number</th>    
                <th>First Name</th>    
                <td>Middle Name</th>    
                <th>Last Name</th>    
                <th>Gender</th>    
                <th>DOB</th>    
                <th>Address</th>    
                <th>Pincode</th>    
                <th>Contact Number</th>
                <th>Mother Name</th>    
                <th>Mother Status</th>    
                <th>Father Name</th>    
                <th>Father Status</th>    
                <th>Marital Status</th>    
                <th>Spouse</th>    
                <th colspan = "2">Action</th>    
            </tr>  
        </thead>
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Middle_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Last_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Gender;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Marital_Status;?>  
				</td>
				<td>  
					<?php echo $row->Spouse;?>  
				</td>
				<td> <a href="../client/delete.php?id=<?php echo $row->Customer_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   	
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/custom.js"></script>	
    </body>    
</html>