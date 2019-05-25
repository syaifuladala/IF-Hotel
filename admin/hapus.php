<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$querya = mysqli_query ($koneksi, "SELECT * FROM datakamar 
      INNER JOIN pemesanan
      ON datakamar.kamar = pemesanan.kamar
      WHERE pemesanan.id='$id'");

	$data= mysqli_fetch_array($querya) or die(mysqli_error());
	$balik=$data['jumlah']+$data['stok'];
	$idkamar=$data['kamar'];

	if($querya!=""){
		$queryb = mysqli_query ($koneksi, "UPDATE datakamar SET stok='$balik' where kamar='$idkamar'") or die (mysqli_error());
		if($queryb!=""){
			$queryc = mysqli_query ($koneksi, "DELETE FROM pemesanan where id='$id'")or die (mysqli_error());
				if($queryc!=""){
					header('location:laporan.php');
				}else{
?>
					<script>
						alert('Gagal Hapus, Coba Lagi!');
				        window.location='laporan.php';
					</script>
<?php
				}
		}
	}
?>