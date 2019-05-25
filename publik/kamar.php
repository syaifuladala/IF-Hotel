<?php
	include"koneksi.php";
	$querystd1=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='std1'");
	$querystd2=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='std2'");
	$queryspr1=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='spr1'");
	$queryspr2=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='spr2'");
	$querydlx=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='dlx'");
	$queryste=mysqli_query($koneksi,"SELECT * FROM datakamar WHERE kamar='ste'");
	$data1= mysqli_fetch_array($querystd1);
	$data2= mysqli_fetch_array($querystd2);
	$data3= mysqli_fetch_array($queryspr1);
	$data4= mysqli_fetch_array($queryspr2);
	$data5= mysqli_fetch_array($querydlx);
	$data6= mysqli_fetch_array($queryste);

?>
<html lang="en">
<head>
  <title>IF Hotel - Kamar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IF Hotel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Beranda</a></li>
      <li class="active"><a href="kamar.php">Kamar</a></li>
      <li><a href="pemesanan.php?kamar=">Pemesanan</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <center>
  <h1>Jenis Kamar</h1>
  <br>
  <div class="row"> 
    <div class="column nature">
	<div class="content">
		<table class="table">
			<tr>
				<td><h2>Standard Room</h2></td>
			</tr>
			<tr>
				<td><img src="gambar/standard.JPG"></td>
				<td colspan="2"><p align="justify">Kamar berukuran 20 meter persegi. Tipe kamar ini tersedia 
				King dengan King Size bed & Twin Bed. Terletak di Lantai 1 hingga 2. 
				Kamar ekonomi sangat cocok bagi anda seorang traveler yang sangat merindukan menginap 
				di hotel berkelas dengan harga yang ekonomis pula. untuk itu kami ada untuk anda.</p>
				</td>
			</tr>
			<tr>
				<td>Kamar Tersedia (1 Bed)</td>
				<td><?php echo $data1['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data1['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
			<tr>
				<td>Kamar Tersedia (2 Bed)</td>
				<td><?php echo $data2['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data2['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
		</table>
    </div>
	</div>
    <div class="column nature">
	<div class="content">
		<table class="table">
			<tr>
				<td><h2>Superior Room</h2></td>
			</tr>
			<tr>
				<td><img src="gambar/superior.JPG"></td>
				<td colspan="2"><p align="justify">Kamar berukuran 20 meter persegi. Terletak di Lantai 3 hingga 4. Tipe kamar ini tersedia 
				King dengan King Size bed & Twin Bed. Retret yang layak untuk kesenangan sejati. Masuki kehangatan dan 
				keanggunan kamar-kamar hotel. Kamar ini juga memiliki hotel berstandar internasional untuk bisnis.</p>
				</td>
			</tr>
			<tr>
				<td>Kamar Tersedia (1 Bed)</td>
				<td><?php echo $data3['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data3['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
			<tr>
				<td>Kamar Tersedia (2 Bed)</td>
				<td><?php echo $data4['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data4['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
		</table>
	</div>
	</div>
    <div class="column nature">
	<div class="content">
	<table class="table">
			<tr>
				<td><h2>Deluxe Room</h2></td>
			</tr>
			<tr>
				<td><img src="gambar/superior.JPG"></td>
				<td colspan="2"><p align="justify">Ukuran Kamar 30 meter persegi. Terletak di Lantai 5 hingga 6. Jenis kamar ini hanya
		  tersedia dalam satu tempat tidur ukuran King, dirancang khusus dan dibuat untuk tamu yang mencari malam
		  romantis yang bagus seperti bulan madu. Rasakan sensasi berbeda menginap di kamar Deluxe kami. Kamar ini
		  juga memiliki hotel berstandar internasional untuk bisnis.</p>
				</td>
			</tr>
			<tr>
				<td>Kamar Tersedia</td>
				<td><?php echo $data5['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data5['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
		</table>	
    </div>
	</div>
    <div class="column nature">
	<div class="content">
	<table class="table">
			<tr>
				<td><h2>Suite Room</h2></td>
			</tr>
			<tr>
				<td><img src="gambar/superior.JPG"></td>
				<td colspan="2"><p align="justify">Ukuran Kamar 30 meter persegi. Terletak di lantai 5 hingga 6. Ruang bisnis kami 
				sangat ideal bagi mereka yang mundur dari urusan bisnis rutin dalam kehidupan sehari-hari. Kamar ini
				menampilkan perabotan dan dekorasi yang mewah dan mewah dalam suasana yang hangat. Kamar-kamar ini 
				menawarkan pemandangan kota yang menawan.</p>
				</td>
			</tr>
			<tr>
				<td>Kamar Tersedia</td>
				<td><?php echo $data6['stok']; ?></td>
				<td><a href="pemesanan.php?kamar=<?php echo $data6['kamar']; ?>"><button class="btn btn-default">PESAN</button></a><td>
			</tr>
		</table>
    </div>
	</div>
</center>
</div>
</body>
</html>
