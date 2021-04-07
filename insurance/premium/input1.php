<?php
include "../connection.php";
$p=$_POST['pol'];
$sql = "select * from policy_data where Policy_num = '$p'";   
$result = mysqli_query($conn,$sql);
 // header("location:../agent/thankyou.php");
?>