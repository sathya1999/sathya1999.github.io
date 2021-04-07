<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="view-port" content="width=device-width initial-scale=1">
    <title>Payment Form</title>  
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
                        PREMIUM REGISTRATION
                     </div> 
                    <ul>
                        <li style="float:right; position=right; "><a href="../index.php" class="submit-btn" style="text-decoration: none;">Back to homepage</a></li>    
                    </ul>
                
            </div>
        </div>
    </div>
  <div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top: 170px;">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 mar-t-40">
                <div class="row">  

                    <form name = "form1" action='view.php' method = 'POST' enctype = "multipart/form-data" >    
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">  
                                    <label style="font-weight: 1000;
    color: #000; text-align: center;">Policy Number:</label>    
                                    <input class="form-control" type = "text" name = "pol" id="button" value = "" required pattern="[0-9]{9}" placeholder="Enter 9 Digit Policy Number" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form">      
                                    <input class="submit-btn" type = "submit" value = "submit" style="" />    
                                </div>
                            </div>
                            <div class="form">      
                                <input class="submit-btn" type = "reset" value = "reset" style="margin-left: -223px;"/>    
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