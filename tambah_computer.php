
<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH KOMPUTER</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #000000;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #1c87c9;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
      <img src="picture/computer.png" style="margin-left: 88px;" alt="A beautiful sunset">
      </div>
      <form action="" method="post">
        <h1><b>TAMBAH MAKLUMAT</b></h1>
        <h3><b>KOMPUTER</b></h3>
        <div class="info">
          <input type="text" name="idk" name="name" placeholder="Masukkan ID komputer">
          <input type="text" name="no_pc" placeholder="Masukkan nombor PC">
          <input type="text" name="jenama" placeholder="Masukkan Jenama">
          <input type="text" name="kondisi" placeholder="Masukkan Kondisi komputer">
          <input type="text" name="catatan" placeholder="Sebarang Catatan">
        </div>
       
        <button type="submit" name="hantar" value="Hantar">Submit</button>
      </form>
    </div>
  </body>
</html>


<!-- code php sini -->

<?php
	include('config.php');
	if (isset($_POST['hantar'])){
    $idk = $_POST ['idk'];
    $no_pc = $_POST ['no_pc'];
    $jenama = $_POST ['jenama'];
    $kondisi = $_POST ['kondisi'];
    $catatan = $_POST ['catatan'];
    $query ="INSERT INTO komputer VALUES ('$idk', '$no_pc', '$jenama','$kondisi','$catatan')";

    if (mysqli_query ($connect, $query)) {
			echo "New record created successfully";
			echo "<a href=\"computer.php\"> DATA KOMPUTER</a>";
		} 
		else {
			echo "Error:" .  $query . "<br>" . mysqli_error($connect);
		}
		mysqli_close($connect);

    header('Location:computer.php');
  }
  ?>




</html>



