<?php

include("koneksi.php");
//Cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // Mendapatkan Nilai Variable
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Phone = $_POST['Phone'];
    $md5=md5($Password);
    
    //File Upload gambar
    $nama = $_FILES['Foto']['name'];
    $lokasi = $_FILES['Foto']['tmp_name'];
    $getExt = explode(".", $nama);
    $newname = $Name.".".end($getExt);
    $path = "img/".$newname;
    $upload = move_uploaded_file($lokasi, $path);
    
    //Pembuatan syntax sql
    $sql = "INSERT INTO user (Name, Email, Password, Foto, Phone) VALUES ('$Name', '$Email', '$md5', '$newname', '$Phone')";

    $query = mysqli_query($koneksi, $sql);

    //Garap File e
    if( $query && $upload) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} else {
    die("Akses dilarang...");
}

?>