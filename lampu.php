<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>lampu</title>
	</head>
<style>
body{
    background-color: #ffffff;
    margin: 0;
}

h1{
    margin-left: 15px;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}
.header{
    border: 1px solid ;
    height: 100px;
    background-color: #5271ff;
}

.wall{
    border: 1px solid black;
    height: 575px;
    background-color: gray;
}


button{
    border-radius: 5px;
    width: 15%;
    height: 35px;
    margin-top: 15px;
    background-color: #5271ff;
    font-family:  Geneva, Verdana, sans-serif;
	color: white;
}

.space{
	margin-top: 8%;
	border: 1px ;
	margin-left: 50%;
	width: 45%;
}

	</style>
   

	<body>
	<div class="container">
<!-- STARTB BAHAGIAN HEADER -->

<div class="header">
<h1>SPMK</h1>


</div>
<div class="wall">
	<div class="space">
		<center>
	<h1><b>LAMPU</b></h1>
	<center>
	<table border=1 cellpadding=7 cellspacing=0 bgcolor=white >
		<tr>
		<th >ID</th>
		<th >NO. LAMPU</th>
		<th >KONDISI</th>
		<th >CATATAN</th>
		<th >PADAM</th>

		
		</tr>
</div>
</div>
</center>
<?php
$papar=mysqli_query($connect, "SELECT * FROM lampu");
while($row=mysqli_fetch_array($papar)){  

	echo "<tr>";
		
	echo "<td>" .$row ["id"]. "</td>";
	echo "<td>" .$row ["no_lampu"]. "</td>";
	echo "<td>" .$row ["kondisi"]. "</td>";
	echo "<td>" .$row ["catatan"]. "</td>";
	echo "<td>","<a  href=\"padam_lampu.php?id=".$row['id']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">DELETE</td>;
		

	</tr>
	";
	
	}
	?>


	</table>
	<p><a href="tambah_lampu.php"><button name='tambah'type="submit"><b> &#43;ADD</b> </button></a></p>
	
	</center>
	</body>
</div>
</html>