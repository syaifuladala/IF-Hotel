<?php
	include "koneksi.php";

	$id=$_POST['id'];
	$nama = $_POST['nama'];
	$ktp = $_POST['ktp'];
	$masuk = $_POST['masuk'];
	$keluar = $_POST['keluar'];
	$jumlah = $_POST['jumlah'];
	if($_POST['kamar']=="std1"){
      $harga=350000;$kamar="std1";
    }else if($_POST['kamar']=="std2") {
      $harga=450000;$kamar="std2";
    }else if($_POST['kamar']=="spr1") {
      $harga=400000;$kamar="spr1";
    }else if($_POST['kamar']=="spr2") {
      $harga=500000;$kamar="spr2";
    }else if($_POST['kamar']=="dlx") {
      $harga=700000;$kamar="dlx";
    }else if($_POST['kamar']=="ste") {
      $harga=1000000;$kamar="ste";
    }

    $datetime1 = new DateTime($masuk);
    $datetime2 = new DateTime($keluar);
    $difference = $datetime1->diff($datetime2);

    $totalbayar=$harga*$jumlah*$difference->days;

	$query = mysqli_query ($koneksi, "UPDATE pemesanan SET nama='$nama', ktp='$ktp', masuk='$masuk', keluar='$keluar',
		kamar='$kamar', jumlah='$jumlah', totalbayar='$totalbayar' where id='$id'") or die (mysqli_error());
	if($query!=""){
		header('location:laporan.php');
	}else{
?>
		<script>
	        alert('Gagal Edit, Coba Lagi!');
	        window.location='laporan.php';
	    </script>
<?php
	}

?>