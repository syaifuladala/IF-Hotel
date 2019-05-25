<?php
	include "koneksi.php";

	$id = $_POST['id'];
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

    $totalbiaya=$harga*$jumlah*$difference->days;

    $querya = mysqli_query ($koneksi, "SELECT * FROM datakamar 
      WHERE datakamar.kamar='$kamar'");
    
    $data= mysqli_fetch_array($querya) or die(mysqli_error());
    $sisa=$data['stok']-$jumlah;
    if($sisa<0){
?>
      <script>
        alert('Maaf, Kamar Habis atau Tidak Cukup!');
        window.location='tambah.php';
      </script>

<?php
    }else{
      $queryb = mysqli_query ($koneksi, "UPDATE datakamar SET stok='$sisa' WHERE kamar='$kamar'") or die (mysqli_error());
      if($queryb!=""){
        $queryc = mysqli_query ($koneksi, "insert into pemesanan values 
        ('$id','$nama','$ktp','$masuk','$keluar','$kamar','$jumlah','$totalbiaya')");
        header("location:laporan.php");
      }else{
?>
        <script>
          alert('Gagal Melakukan Reservasi, Coba Lagi!');
          window.location='tambah.php';
        </script>
<?php
      }
    }
?>