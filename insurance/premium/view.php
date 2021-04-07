<?php
include "input1.php";
$f=0;
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
    <body style="line-height: 1; font-family: 'BentonSans-Regular';background: url(../premium/6.jpg) no-repeat center center;
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
    min-height: 250px;
    margin-top: 45px;
    width: 100%;">    
		<!-- <link href = "regg.css" type = "text/css" rel = "stylesheet" />  
	    <link href = "../style1.css" type = "text/css" rel = "stylesheet" />  -->
		<ul>
			<!-- <li class="submit-btn" style="text-decoration: none; float:right;"><a href="../premium/premium.php" style=" color: #ffffff;"> Back to Admin page</a></li> -->
			<!-- <a href="../login/logout.php" role="submit"  style="color: white; font-size: 17px;text-transform: unset; padding: 10px 15px; border-radius: 3px; background: red; transition: .5s; float:right;">LOG OUT</a> -->
		</ul>		
		<h1><center style="color: #ffffff;">Premium Data</center></h1>
		
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" style="/*margin-left: auto;
    margin-right: auto;
    width: 15em; */margin-top: 100px;
}">    
			<div class = "container" style="font-size: 20px; color: #ffffff; text-align: center;">
			<?php while($row = mysqli_fetch_object($result)){?>
				<div class = "form_group">
                    <label><b>Policy Number:</b> </label><label><i><?php $f=1; echo $row->Policy_Num;?></i></label><br>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">
					<label>Customer Number: </label><label><i><?php echo $row->Customer_Num;?></i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Agent Code: </label><label><i><?php echo $row->Agent_code;?></i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Date Of Contact: </label><label><i><?php echo $row->DOC;?></i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Product: </label><label><i><?php echo $row->Product;?></i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Sum Assured: </label><label><i><?php echo $row->Sum_Assured;?></i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Payment Period: </label><label><i><?php echo $row->Pay_Period;?> years</i></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Insurance Period: </label><label><i><?php echo $row->Ins_Period;?> years</i></label>
                </div>
				<div class = "form_group">
				<input name='Pol' value="<?php echo $row->Policy_Num;?>" hidden>
				</div>
				<div class = "form_group">
				</div>				
                <div class = "form_group">    
                    <label>Premium payed?: </label>    
                    <input type = "radio" name = "pay" value = "Yes" required />Yes
					<input type = "radio" name = "pay" value = "No" required />No
				</div>
				<div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" style="padding-top: 10px;">
                                <div class="form">      
                                    <input class="submit-btn" type = "submit" value = "submit" style="margin-left: 510px;" />    
                                </div>
                            </div>
                           
                        </div>


			<?php }
			// if ($f == 0){
			// 	echo "Policy Not Found";
			// 	echo "<a href='premium.php'>Back to search page</a>";
			// }
			?>
				
            </div>    
        </form>    
    </body>    
</html>