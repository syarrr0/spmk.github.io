<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>KOMPUTER  </title>
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

h2{
	color: black;
	font-family: sans-serif;
	font-size: 35;
	font-family:bold, sans-serif;
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
	<center><h2><b>COMPUTER</b></h2>
	
	<table border=1 cellpadding=7 cellspacing=0 bgcolor=white >
		<tr>
		<th >ID</th>
		<th >NO. PC</th>
		<th >JENAMA</th>
		<th >KONDISI</th>
		<th >CATATAN</th>
		<th >PADAM</th>

		
		</tr>
</div>
</center>
		<!--memaparkan rekod staf-->
<?php
$papar=mysqli_query($connect, "SELECT * FROM komputer");
while($row=mysqli_fetch_array($papar)){  

	echo "<tr>";
		
	echo "<td>" .$row ["idk"]. "</td>";
	echo "<td>" .$row ["no_pc"]. "</td>";
	echo "<td>" .$row ["jenama"]. "</td>";
	echo "<td>" .$row ["kondisi"]. "</td>";
	echo "<td>" .$row ["catatan"]. "</td>";
	echo "<td>","<a  href=\"padam_computer.php?idk=".$row['idk']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">DELETE</td>;
		

	</tr>
	";
	
	}
	?>
		
	</table>
	<center>
	<p><a href="tambah_computer.php"><button name='tambah'type="submit"><b> DAFTAR</b> </button></a></p>
	
	</center>
	</div>
	</div>
	</body>
</html>