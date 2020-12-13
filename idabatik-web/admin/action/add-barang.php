<?php 

	include '../../db/connection.php';

		$nama_produk = $_POST['nama_produk'];
		$thumbnail = $_FILES['gambar']['name'];
		$jenis = $_POST['select_jenis'];
		$jenis_kain = $_POST['select_jenis_kain'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

		if (!empty($thumbnail)) {
			$allowed_ext = array('png', 'jpg');
			$x = explode('.', $thumbnail);
			$ext = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];
			$angka_acak = rand(1, 999);

			$nama_gambar_baru = $angka_acak.'-'.$thumbnail;
			if (in_array($ext, $allowed_ext) == true) {
			 	move_uploaded_file($file_tmp, '../../img-uploaded/'. $nama_gambar_baru);

			 	$query = "INSERT INTO produk(id_jenis, id_jenis_kain, nama_produk, harga, deskripsi, thumbnail) VALUES 
				('".$jenis."', '".$jenis_kain."', '".$nama_produk."','".$harga."', '".$deskripsi."', '".$nama_gambar_baru."') ";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../pages/daftar-barang.php';</script>";
                  }
			 }else {
			 	echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../pages/tambah-barang.php';</script>";
			 }
	}else {
		$query = "INSERT INTO produk(id_jenis, nama_produk, harga, deskripsi, thumbnail) VALUES 
				('".$jenis."', '".$jenis_kain."', '".$nama_produk."','".$harga."', '".$deskripsi."', '".$nama_gambar_baru."') ";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                  }
	}
?>