	<?php
   if(isset($_SESSION['login_user'])){
    header("location: ../table/admin1.php");
    // header("location: modified123.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		label.error {
	      	color: red;
	      	margin-top: 5px;
	      	font-size: 11px;
	   	}
	</style>
</head>	
<body>
	<ul>
	<li class="submit-btn" style="text-decoration: none; float:right;color: #ffffff;
    display: inline-block;
    padding: 10px 50px;
    margin-bottom: 0px;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.42857;
    text-align: center;
    border: 0px solid transparent;
    border-radius: 4px;
    background: #008fd3 none repeat scroll 0% 0% !important;"><a href="../index.php" style=" color: #ffffff;"> Back to homepage</a></li>
	</ul>
<form method="post" action="login.php" class="box" id="registration">
	<h1 class="name">Login</h1>
	<input type="email" name="email" placeholder="Email">
	<div class="textbox">
		<input type="password" name="password" placeholder="Password">
	</div>
		 <button type="submit">Login</button>
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../js/jquery.validate.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>