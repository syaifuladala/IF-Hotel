<?php
	include"sessionchecker.php";
	$chara= '123456789';
	$resulta = '';
	$resulta .= $chara[mt_rand(0, 8)];
	$charb = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$resultb ='';
	for ($i = 0; $i < 3; $i++)
    $resultb .= $charb[mt_rand(0, 25)];
	$result=$resulta."".$resultb;
?>

<html lang="en">
<head>
  <title>IF Hotel - Pemesanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">IF Hotel</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="laporan.php">Laporan</a></li>
	      <li class="active"><a href="tambah.php">Tambah</a></li>
	      <li><a href="logout.php">Keluar</a></li>
	    </ul>
	  </div>
	</nav>
  
<div class="container">
  <h3>Isikan Data Diri</h3>
  <form action="proses_tambah.php" method="POST">
    <table class="table">
        <tr>
          <td>Kode</td>
          <td><input type="text" name="id" value="<?php echo"$result"?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Nomor KTP</td>
          <td><input type="text" name="ktp"></td>
        </tr>
        <tr>
          <td>Tanggal Masuk</td>
          <td><input type="date" name="masuk"></td>
        </tr>
        <tr>
          <td>Tanggal Keluar</td>
          <td><input type="date" name="keluar"></td>
        </tr>
        <tr>
          <td>Jenis Kamar</td>
          <td><select name="kamar">
			<option>-PILIH JENIS KAMAR-</option>
            <option value="std1">Standard Room (1 Bed)</option>
            <option value="std2">Standard Room (2 Bed)</option>
            <option value="spr1">Superior Room (1 Bed)</option>
            <option value="spr2">Superior Room (2 Bed)</option>
            <option value="dlx">Deluxe Room</option>
            <option value="ste">Suite Room</option>
          </select></td>
        </tr>
        <tr>
          <td>Jumlah Kamar</td>
          <td><input type="number" name="jumlah" min="1" max="20" ></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="PESAN" class="btn btn-default"></td>
        </tr>
      </table>
  </form>
</div>

</body>
</html>
