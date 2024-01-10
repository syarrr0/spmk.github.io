<?php 
include ('config.php');

$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM lampu WHERE id='$id'");
header("location:lampu.php");
?>
