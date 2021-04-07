<!DOCTYPE html>
<html>
<head>
	<title>LIC-Contact</title>
</head>
<body>
 <link href = "style6.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style3.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../index.php">Back to homepage</a></li>    
		</ul>
			<center><h2>Contact</h2></center>
			<center>
				<p>Please feel free to contact us on regarding insurance policies using one of below!. Thank you!</p>
				<p><b>Phone:</b> 9148117460 </p>
				<p><b>FAX:</b> 56767877 </p><br>
				<p>Alternatively you can send us a message!</p>
				<form method="POST" action="../dbactions/contact.php">

					Name: <input type="text" name="name" />
					<p></p>
					Email: <input type="text" name="email" />
					<p></p>
					Message:
					<p></p>
					<textarea rows="10" cols="40" name="body" placeholder="In here..."></textarea>
				
					<td> <a  href="#" type="submit" name="submit" onclick="return confirm('Mail sent sucessfully!')">Send    
				</a> </td>	



			</center>
</body>
</html>