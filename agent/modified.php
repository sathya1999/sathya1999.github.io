<?php    
include "input.php";    
        
$sql = "select * from agent_new";    
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
    <body>    
        <!-- <link href = "../style3.css" type = "text/css" rel = "stylesheet" />    
		<link href = "regg.css" type = "text/css" rel = "stylesheet" />  -->   
		<table class="table table-striped table-hover table-bordered" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Agent Code</td>    
                <td>Agent Name</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Branch</td>    
				<td>Contact Number</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_name;?>  
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
					<?php echo $row->Branch;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Num;?>  
				</td>  
				<td> <a href="delete.php?id =     
					<?php echo $row->Agent_code;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> 
				</td>  
			</tr>  
		<?php } ?>  			
        </table>
<?php header('Location: modified1.php')?>; 
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/custom.js"></script>  		
    </body>    
</html>