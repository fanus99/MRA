<?php
include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if( isset($_GET['UserID']) ){
    if(isset($_POST['simpan'])){

        // ambil data dari formulir
        $UserID = $_POST['UserID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Phone = $_POST['Phone'];
        $md5=md5($Password);
        
        $nama = $_FILES['Foto']['name'];
        $lokasi = $_FILES['Foto']['tmp_name'];
        $getExt = explode(".", $nama);
        $newname = $NamaBarang.".".end($getExt);
        $path = "img/".$newname;
        $upload = move_uploaded_file($lokasi, $path);
        
        // buat query update
        $sql = "UPDATE user SET Name='$Name', Email='$Email', Password='$md5', Foto='$newname', Phone = '$Phone' WHERE UserID=$UserID";
        $query = mysqli_query($koneksi, $sql);

        // apakah query update berhasil?
        if( $query && $upload) {
            echo "Sukses";
        } else {
            echo "Gagal";
        }
    } else {
        die("Akses dilarang...");
    }
}else{
    die("Akses Dilarang");
}

?>