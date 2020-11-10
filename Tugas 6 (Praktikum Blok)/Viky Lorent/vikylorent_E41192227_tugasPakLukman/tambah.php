<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, agama, username, pass ) VALUE ('$nim', '$nama', '$tanggal_lahir', '$agama', '$username', '$password')";
    $query = mysqli_query($kon, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "sukses";
    } else {
        echo "cok";
    }
} else {
    die("Akses dilarang...");
}

?>