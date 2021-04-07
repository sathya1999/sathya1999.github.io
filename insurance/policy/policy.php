 <!DOCTYPE html>
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
    <body style="line-height: 1; font-family: 'BentonSans-Regular'; background-color: #DADADC;">    
    <div class="container-fluid navbar-fixed-top" style="background:#000000;padding: 10px 0;">
        <div class="container">
            <div class="row">
                    <div class="banner-head">
                        POLICY REGISTRATION
                     </div> 
                    <ul>
                        <li style="float:right; position=right; "><a href="../index.php" class="submit-btn" style="text-decoration: none;">Back to homepage</a></li>    
                    </ul>
                
            </div>
        </div>
    </div>
    <div class="container-fluid">
    	<div class="container">
    		<div class="row" style="margin-top: 150px;">
    			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 mar-t-40">
    				<div class="row">  

    					<form name = "form1" action='input.php' method = 'POST' enctype = "multipart/form-data" >    
    						<div class="row">
    							<div class="col-xs-12 col-sm-6 col-md-6">
    								<div class="form-group">    
    									<label style="font-weight: 1000;
                                        color: #000;">Policy Number:</label>    
                                        <input class="form-control" type = "text" name = "Policy_Num" id="button" required pattern="[0-9]{9}" placeholder="Enter 9 Digit Policy Number" />    
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label style="font-weight: 1000;
                                        color: #000;">Customer Number:</label>    
                                        <select class="form-control" name = "Customer_Num" id="button">
                                          <?php 
                                          include "../connection.php";
                                          $sql="select * from customerr";
                                          $result = mysqli_query($conn,$sql);
                                          $i=0;
                                          while($row=mysqli_fetch_object($result)){
                                             $i++;
                                             ?>
                                             <option value = "<?php echo $row->Customer_Num?>"><?php echo $row->Customer_Num?></option>
                                         <?php } ?>
                                     </select>
                                 </div>   
                             </div>
                         </div> 
                         <div class="row">
                             <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">     
                                   <label style="font-weight: 1000;
                                   color: #000;">Agent Code:</label>    
                                   <select class="form-control" name = "Agent_code" id="button">
                                      <?php 
                                      include "../connection.php";
                                      $sql="select * from agent_new";
                                      $result = mysqli_query($conn,$sql);
                                      $i=0;
                                      while($row=mysqli_fetch_object($result)){
                                         $i++;
                                         ?>
                                         <option value = "<?php echo $row->Agent_code?>"><?php echo $row->Agent_code?></option>
                                     <?php } ?>
                                 </select>
                             </div>   
                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group"> 
                                <label style="font-weight: 1000;
                                color: #000;">Date Of Contact:</label>    
                                <input class="form-control" type = "date" name = "DOC" id="button" value = "" required placeholder="Enter Date Of Contact" />    
                            </div> 
                        </div>
                    </div> 
                    <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">     
                           <label style="font-weight: 1000;
                           color: #000;">Product:</label>    
                           <input class="form-control" type = "text" name = "Product" id="button" value = "" required placeholder="Enter Product Name" />    
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">   
                        <label style="font-weight: 1000;
                        color: #000;">Total Sum:</label>  
                        <input class="form-control" type = "text" name = "Sum_assured" id="button" value = ""  required placeholder="Enter Sum Assured" />    
                    </div>
                </div>
            </div>
            <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">     
                   <label style="font-weight: 1000;
                   color: #000;">Payment Period: </label>    
                   <input class="form-control" type = "text" name = "Payment_period" id="button" value = ""  required placeholder="Enter Payment Period in Year" />    
               </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-6">
            <label style="font-weight: 1000;
            color: #000;">Insurance Period:</label>
            <div class="form-group">     
               <input class="form-control" type = "text" name = "Ins_period" id="button" value = ""  required placeholder="Enter Insurance Period in Year" />    
           </div>
       </div>
   </div>
   <div class="row">
     <!-- <div class="col-xs-12 col-sm-6 col-md-6"> -->
        <div class="form-group" style="padding: 15px;">  

           <label style="font-weight: 1000;
           color: #000;">Premium mode: </label>    
           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="mode" value = "MLY" required>
           <label class="custom-control-label" for="defaultGroupExample1" style="font-weight: 1000;
           color: #000;">Monthly</label>  
           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="mode" value = "YLY" required>
           <label class="custom-control-label" for="defaultGroupExample1" style="font-weight: 1000;
           color: #000;">Yearly</label>   
           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="mode" value = "QLY" required>
           <label class="custom-control-label" for="defaultGroupExample1" style="font-weight: 1000;
           color: #000;">Quarterly</label>   
           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="mode" value = "SSS" required>
           <label class="custom-control-label" for="defaultGroupExample1" style="font-weight: 1000;
           color: #000;">Single-premium</label>    
           
       </div>
       <!-- </div> -->
   </div>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form">      
            <input class="submit-btn" type = "submit" value = "submit" style="margin-left: 230px;" />    
        </div>
    </div>
    <div class="form">      
        <input class="submit-btn" type = "reset" value = "reset"/>    
    </div>
</div>



</form>    

</div>
</div>
</div>
</div> 

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/custom.js"></script>   
</body>    
</html>      