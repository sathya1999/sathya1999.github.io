<?php
include "../connection.php";    
if(isset($_GET['id'])){    
$sql = "delete from agent_new where Agent_code = '".$_GET['id']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:../table/modified1.php');
?>