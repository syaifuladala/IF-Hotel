<?php
session_start();
include "koneksi.php";
foreach($_POST as $key=>$value){
	${$key}=$value;
}

$sql=mysqli_query($koneksi,"select * from admin where username = '$username' AND pass = '$pass'");
$num=mysqli_num_rows($sql);
if($num==1){
	$_SESSION['username']=$username;
	header('location:laporan.php');
	
}else{
?>
	<script>
		alert('Username atau Password Salah!');
		window.location='login.php';
	</script>
<?php
}

?>