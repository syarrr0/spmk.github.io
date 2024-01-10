<?php 
include ('config.php');

$idk=$_GET['idk'];
$result=mysqli_query($connect,"DELETE FROM komputer WHERE idk='$idk'");
header("location:computer.php");
?>
