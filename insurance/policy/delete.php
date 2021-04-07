<?php
include "../connection.php";    
if(isset($_GET['pol'])){    
$sql = "delete from policy_data where Policy_Num = '".$_GET['pol']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:../table/modified123.php');
?>