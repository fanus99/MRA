<?php
	$host='localhost';
	$user='root';
	$pass='';
	$database='recycle';

	$koneksi=mysqli_connect($host, $user, $pass); // Atribut pada hw_DocByAnchor(connection, anchorID) 

	mysqli_select_db($koneksi, $database); // Menentukan  DB Koneksi
?>