<?php
	$kamar=$_GET['kamar'];
?>
<html lang="en">
<head>
  <title>IF Hotel - Pemesanan</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="all.css">
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
      <li><a href="home.php">Beranda</a></li>
      <li><a href="kamar.php">Kamar</a></li>
      <li class="active"><a href="pemesanan.php?kamar=">Pemesanan</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Isikan Data Diri<?php echo $kamar?></h3>
  <form action="proses_pemesanan.php" method="POST">
    <div class="form-group">
    <table class="table">
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
            <option value="std1"<?php if ($kamar=="std1"){echo "selected";} ?>>Standard Room (1 Bed)</option>
            <option value="std2"<?php if ($kamar=="std2"){echo "selected";} ?>>Standard Room (2 Bed)</option>
            <option value="spr1"<?php if ($kamar=="spr1"){echo "selected";} ?>>Superior Room (1 Bed)</option>
            <option value="spr2"<?php if ($kamar=="spr2"){echo "selected";} ?>>Superior Room (2 Bed)</option>
            <option value="dlx"<?php if ($kamar=="dlx"){echo "selected";} ?>>Deluxe Room</option>
            <option value="ste"<?php if ($kamar=="ste"){echo "selected";} ?>>Suite Room</option>
          </select></td>
        </tr>
        <tr>
          <td>Jumlah Kamar</td>
          <td><input type="number" name="jumlah" min="1" max="20" ></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="PESAN" value="PESAN" class="btn btn-default"></td>
        </tr>
      </table>
    </div>
  </form>
</div>

</body>
</html>
