<?php
	$host = 'prognet.localnet';
	$user = '2205551156';
	$pass = '2205551156';
	$db = 'db_2205551156';

	$conn = new mysqli($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
