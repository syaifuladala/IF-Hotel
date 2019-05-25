<?php
	include"sessionchecker.php";
?>

<html lang="en">
<head>
  <title>IF Hotel - Beranda</title>
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
	      <li><a href="laporan.php">Laporan Pemesanan</a></li>
	      <li class="active"><a href="datakamar.php">Data Kamar</a></li>
	      <li><a href="tambah.php">Tambah</a></li>
	      <li><a href="logout.php">Keluar</a></li>
	    </ul>
	  </div>
	</nav>
<center>
	<div class="container">
	  <h3>Data Reservasi Hotel</h3>
	  
	<table class="table" align="center">
		<tr>
			<th>Tipe Kamar</th>
			<th>Tersedia</th>
			<th>Harga</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$sql = mysqli_query ($koneksi, "SELECT * FROM datakamar ") or die (mysqli_error());
		while($query = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $query['nama_kamar'];?></td>
				<td><?php echo $query['stok'];?></td>
				<td><?php echo $query['harga'];?></td>
			</tr>
		<?php } ?>
	</table>
	</center>
</div>
</body>
</html>