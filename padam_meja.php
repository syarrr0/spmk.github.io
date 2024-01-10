<?php 
include ('config.php');

$id=$_GET['id'];
$result=mysqli_query($connect,"DELETE FROM meja WHERE id='$id'");
header("location:meja.php");
?>
