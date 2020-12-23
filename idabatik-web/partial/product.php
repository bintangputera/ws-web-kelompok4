<?php 
    
    
    $query = mysqli_query($mysqli, "select produk.id_produk, produk.nama_produk, produk.slug, jenis_produk.jenis_produk, jenis_kain.jenis_kain, produk.harga, produk.deskripsi, produk.thumbnail from ((produk Inner join jenis_produk on produk.id_jenis = jenis_produk.id_jenis) INNER JOIN jenis_kain on produk.id_jenis_kain = jenis_kain.id_jenis_kain)");

    $query_total_produk = mysqli_query($mysqli, "SELECT COUNT(id_produk) as total FROM produk");
    $total_produk = mysqli_num_rows($query_total_produk);

?>