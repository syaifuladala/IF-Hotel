<html lang="en">
<head>
  <title>IF Hotel - Pemesanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="all.css">
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
      <li><a href="home.php">Beranda</a></li>
      <li><a href="kamar.php">Kamar</a></li>
      <li class="active"><a href="pemesanan.php?kamar=">Pemesanan</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <center>
  <?php
    $chara= '123456789';
    $resulta = '';
    $resulta .= $chara[mt_rand(0, 8)];
    $charb = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $resultb ='';
    for ($i = 0; $i < 3; $i++)
      $resultb .= $charb[mt_rand(0, 25)];
    $result=$resulta."".$resultb;

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
	$selisih=$difference->days;
    $totalbiaya = (int)$harga * (int)$jumlah * (int)$selisih;

    include "koneksi.php";
    $querya = mysqli_query ($koneksi, "SELECT * from datakamar
      WHERE kamar='$kamar'");
    $data= mysqli_fetch_array($querya);
    $sisa= $data['stok']-$jumlah;
	
    if($sisa<0){
?>
      <script>
        alert('Maaf, Kamar Habis atau Tidak Cukup!');
        window.location='home.php';
      </script>

<?php
    }else{
      $queryb = mysqli_query ($koneksi, "UPDATE datakamar SET stok='$sisa' WHERE kamar='$kamar'") or die (mysqli_error());
      if($queryb!=""){
        $queryc = mysqli_query ($koneksi, "insert into pemesanan values 
        ('$result','$nama','$ktp','$masuk','$keluar','$kamar','$jumlah','$totalbiaya')");
      }else{
?>
        <script>
          alert('Gagal Melakukan Reservasi, Coba Lagi!');
          window.location='pemesanan.php';
        </script>
<?php
      }
    }
?>

  <h3>KODE PEMESANAN</h3>
  <p>Simpan Kode Pembayaran Untuk Registrasi Ulang di Hotel</p>
  <h1><?php echo $result; ?></h1>
  <p>Total Pembayaran : Rp <?php echo $totalbiaya; ?> </p>
  </center>
</div>

</body>
</html>
