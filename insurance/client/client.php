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
                        COSTOMER REGISTRATION
                     </div> 
                    <ul>
                        <li style="float:right; position=right; "><a href="../index.php" class="submit-btn" style="text-decoration: none;">Back to homepage</a></li>    
                    </ul>
                
            </div>
        </div>
    </div>
  
  <div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top: 140px;">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 mar-t-40">
                <div class="row">  
                
                  <form name = "form1" action='input.php' method = 'POST' enctype = "multipart/form-data" >    
                   <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">    
                         <!--  <label>First Name:</label>   -->  
                         <input class="form-control" type = "text" name = "First_Name" id="button" value = "" required placeholder="Enter First Name" />    
                     </div>
                 </div>    
                 <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">   
                      <!--   <label>Middle Name:</label>   -->  
                      <input class="form-control" type = "text" name = "Middle_Name" id="button" value = "" required placeholder="Enter Middle Name" />    
                  </div>
              </div>
          </div>    
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">   
                 <!--  <label>Last Name:</label>  -->   
                 <input class="form-control" type = "text" name = "Last_Name" id="button" value = "" required placeholder="Enter Last Name" />    
             </div>
         </div>  
         <div class="col-xs-12 col-sm-6 col-md-6">
            <div  class="form-group">    
             <!--  <label>Gender:	</label> -->
             <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Gender" value="M">
  <label class="custom-control-label" for="defaultGroupExample1">Male</label>

  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Gender" value="F">
  <label class="custom-control-label" for="defaultGroupExample1">Female</label>
         </div>
     </div>
 </div>
 <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">     
         <!--  <label>Date of Birth:	</label> -->
         <input class="form-control" type = "date" name = "DOB" id="button" value = "" required placeholder="enter dob" />
     </div>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="form-group">     
        <!-- <label>Address:</label>  -->   
        <input class="form-control" type = "text" name = "Address" id="button" value = "" required placeholder="Enter Address" />    
    </div>
</div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">   
            <!-- <label>Pincode: </label>    --> 
            <input class="form-control" type = "text" name = "Pincode" id="button" value = ""  required placeholder="Enter Pincode" />    
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">  
         <!--  <label>Contact Number: </label> -->    
         <input class="form-control" type = "text" name = "Contact_Number" id="button" value = ""  required pattern="[0-9]{10}" placeholder="Enter Phone Number" />    
     </div>
 </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">    
            <!-- <label>Mother Name: </label> -->    
            <input class="form-control" type = "text" name = "Mother_Name" id="button"value = ""  required placeholder="Enter Mother Name" />    
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">    
            <!--     <label>Mother Status: </label>     -->
            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Mother_Status" value="A">
  <label class="custom-control-label" for="defaultGroupExample1">Alive</label>

  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Mother_Status" value="D">
  <label class="custom-control-label" for="defaultGroupExample1">Dead</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group"> 
            <!--     <label>Father Name: </label>  -->   
            <input class="form-control" type = "textbox" name = "Father_Name" id="button" value = ""  required placeholder="Enter Father Name" />    
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">    
            <!-- <label>Father Status: </label>   -->  
            <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Father_Status" value="A">
  <label class="custom-control-label" for="defaultGroupExample1">Alive</label>

  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Father_Status" value="D">
  <label class="custom-control-label" for="defaultGroupExample1">Dead</label>
</div>  
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">    
            <!-- <label>Marital Status: </label>    --> 
           <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Marital_Status" value="S">
  <label class="custom-control-label" for="defaultGroupExample1">Single</label>

  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="Marital_Status" value="M">
  <label class="custom-control-label" for="defaultGroupExample1">Married</label>   
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">      
            <!-- <label>Spouse Name: </label>  -->   
            <input  class="form-control"type = "textbox" name = "Spouse" id="button" value = ""  placeholder="Enter Spause Name" />    
        </div>
    </div>
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