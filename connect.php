<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'db_tugasakhir';
	
	$connect = mysqli_connect($host, $user, $password, $db);
	
	if(!$connect)
	{
		echo 'koneksi database gagal';
	}
?>