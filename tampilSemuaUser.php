<?php 
	include('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM user";
	
	//Mendapatkan Hasil
	$r = mysqli_query($koneksi, $sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array("UserID"=>$row['UserID'], "Name"=>$row['Name']));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($koneksi);
?>