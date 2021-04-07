<?php    
     
$sql = "select * from customerr";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
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
    <body>    
        <!-- <link href = "../style3.css" type = "text/css" rel = "stylesheet" />    
		<link href = "regg1.css" type = "text/css" rel = "stylesheet" /> -->    
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Customer Number</td>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Gender</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Contact Number</td>
                <td>Mother Name</td>    
                <td>Mother Status</td>    
                <td>Father Name</td>    
                <td>Father Status</td>    
                <td>Marital Status</td>    
                <td>Spouse</td>    
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->id;?>  
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
					<?php echo $row->Marital_status;?>  
				</td>
				<td>  
					<?php echo $row->Spouse;?>  
				</td>
				<td> <a href="delete.php?id=<?php echo $row->Customer_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
	<?php header('Location:modified1.php');?>
    </body>    
</html>