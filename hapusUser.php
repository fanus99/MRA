<?php

include("koneksi.php");

if( isset($_GET['UserID']) ){

    // ambil id dari query string
    $UserID = $_GET['UserID'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE UserID=$UserID";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        echo "Berhasil dihapus";
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>