<?php
session_start();
if(isset($_SESSION['username'])){
	
}else{
?>
	<script>
		alert('Login Dahulu!');
		window.location='login.php';
	</script>
<?php
}
?>