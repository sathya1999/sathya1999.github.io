<?php    
    
include "../connection.php";    
    
$sql = "select * from paid_premium";    
$result = mysqli_query($conn,$sql);    
$sql1 = "select * from unpaid_premium";
$result1 = mysqli_query($conn,$sql1);  
?>    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="view-port" content="width=device-width initial-scale=1">
    <title>premium data</title>  
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
			<!-- <a href="../premium/excel.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: green; transition: .5s;float:left;">DOWNLOAD</a> -->
			<li class="submit-btn" style="text-decoration: none; float:right;"><a href="admin1.php" style=" color: #ffffff;"> Back to Admin page</a></li>
			<!-- <a href="../login/logout.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: red; transition: .5s; float:right;">LOG OUT</a> -->
		</ul>		
	<h1 style="font-family: auto;
    font-size: 45px;"> <center>Premium details</center></h1>
	<h2> <center>Paid Premiums</center> </h2>
		<table class="table table-striped table-hover table-bordered" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">
        <thead>
        	 <tr>    
                <td>Receipt Number</td>    
                <td>Receipt Date</td>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
            </tr>  
        </thead>  
           
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Receipt_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Receipt_Date;?>  
				</td>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
			</tr> 
		<?php }?>
        </table>
		<h2><center> Unpaid Premiums<center> </h2>
        <table class="table table-striped table-hover table-bordered" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
				<td>Fine</td>
				<td>Lateness</td>
            </tr>  
	<?php    
    
		while($row1 = mysqli_fetch_object($result1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row1->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
				<td>  
					<?php echo $row1->Fine;?>  
				</td>  
				<td>  
					<?php echo $row1->Lateness;?>  
				</td>  
				
			</tr> 
		<?php }?>
        </table>
    </body>    
</html>