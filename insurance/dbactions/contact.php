<?php 
	include "../connection.php";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['body'];
	$query="insert into contact(name,email,message) values('".$name."','".$email."','".$message."')";
	// echo $query;exit;
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
		header("Location: ../contact/contact.html");
 ?>