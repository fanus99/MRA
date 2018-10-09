<?php 
$UserID = $_GET['UserID'];
	
	//Importing database
	include('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM user WHERE UserID=$UserID";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($koneksi ,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array("UserID"=>$row['UserID'],"Name"=>$row['Name'],"Email"=>$row['Email'],"Phone"=>$row['Phone']));
 
	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($koneksi);
?>
