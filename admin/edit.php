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
	      <li class="active"><a href="edit.php">Edit</a></li>
	      <li><a href="laporan.php">Kembali</a></li>
	      <li><a href="logout.php">Keluar</a></li>
	    </ul>
	    </div>
	</nav>
  
<div class="container">
  		<?php 
			include 'koneksi.php';
			$id=$_GET['id'];
			$sql = mysqli_query ($koneksi, "select * from pemesanan where id='$id'") or die (mysqli_error());
			$data= mysqli_fetch_array($sql) or die(mysqli_error());
		?>
		
		<h2 align="center">EDIT DATA</h2>
		<form method="post" action="proses_edit.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>";>
			<table class="table">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Nomor KTP</td>
					<td><input type="text" name="ktp" value="<?php echo $data['ktp']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Masuk</td>
					<td><input type="date" name="masuk" value="<?php echo $data['masuk']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Keluar</td>
					<td><input type="date" name="keluar" value="<?php echo $data['keluar']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kamar</td>
					<td><select name="kamar">
							<option value="std1"<?php if ($data['kamar']=="std1"){echo "selected";} ?>>Standard Room (1 Bed)</option>
			            	<option value="std2"<?php if ($data['kamar']=="std2"){echo "selected";} ?>>Standard Room (2 Bed)</option>
			            	<option value="spr1"<?php if ($data['kamar']=="spr1"){echo "selected";} ?>>Superior Room (1 Bed)</option>
			                <option value="spr2"<?php if ($data['kamar']=="spr2"){echo "selected";} ?>>Superior Room (2 Bed)</option>
			                <option value="dlx"<?php if ($data['kamar']=="dlx"){echo "selected";} ?>>Deluxe Room</option>
			            	<option value="ste"<?php if ($data['kamar']=="ste"){echo "selected";} ?>>Suite Room</option> 
					</select></td>
				</tr>
				<tr>
					<td>Jumlah Kamar</td>
					<td><input type="number" name="jumlah" min="1" max="20" value="<?php echo $data['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="UPDATE" class="btn btn-default"></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>