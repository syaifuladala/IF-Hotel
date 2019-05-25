<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "dbhotel";
	
	$koneksi = new mysqli($hostname, $username, $password);
	
	if($koneksi){
		mysqli_select_db($koneksi, $db);
	}
?>