<?php
 include("Koneksi.php"); // untuk memanggil file koneksi.php
$id=$_GET['id'];
//query untuk delete data
$query=mysql_query("DELETE FROM barang WHERE id='".$id."'");
//setelah data dihapus redirect ke halaman tampil.php
header("Location:tampil.php");
?>