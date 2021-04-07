
<?php
include "../connection.php";    
if(isset($_GET['id'])){    
$sql = "delete from customerr where Customer_Num = '".$_GET['id']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:../table/modified12.php');
?>