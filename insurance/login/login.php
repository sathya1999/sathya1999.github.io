<?php
session_start();
include "../connection.php";

$error='';

if(empty($_POST['email']) || empty($_POST['password'])){
	$error = "email or password invalid";

} else {
	$email=$_POST['email'];
	$password=$_POST['password'];
	  $sql = "SELECT id, user FROM login WHERE email = '".$email."' and password = '".sha1($password)."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
	if($count)
	{
		$_SESSION['login_user']=$email;
		$_SESSION['username']=$row['user'];
		header("location:../table/admin1.php");
	}
	else{
		$error = "email or password invalid";
		header("location: admin.php");
	}
	mysqli_close($conn);
}
?>


