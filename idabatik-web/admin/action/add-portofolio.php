<?php 

	include '../../db/connection.php';

		$judul = $_POST['judul_portofolio'];
		$thumbnail = $_FILES['gambar']['name'];
		$editorContent = $_POST['contentEditor'];
		$str = str_replace(" ", "-", $judul);
		$slug = strtolower($str);
		$date = date("d-m-Y");

		if (!empty($thumbnail)) {
			$allowed_ext = array('png', 'jpg');
			$x = explode('.', $thumbnail);
			$ext = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];
			$angka_acak = rand(1, 999);

			$nama_gambar_baru = $angka_acak.'-'.$thumbnail;
			if (in_array($ext, $allowed_ext) == true) {
			 	move_uploaded_file($file_tmp, '../../uploaded-images/portofolio/'. $nama_gambar_baru);

				$query = "INSERT INTO portofolio(judul_portofolio, slug, thumbnail, deskripsi, created_at) VALUES 
					('".$judul."', '".$slug."', '".$nama_gambar_baru."', '".$editorContent."', '".$date."')";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../pages/portofolio/daftar-portofolio';</script>";
                  }
			 }else {
			 	echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../pages/portofolio/tambah-portofolio';</script>";
			 }
		}else {
			$query = $mysqli->query("INSERT INTO portofolio(judul_portofolio, slug, thumbnail, deskripsi, created_at) VALUES 
			('".$judul."', '".$slug."', '".$nama_gambar_baru."', '".$editorContent."', '".$date."')") or die (mysqli_error($mysqli));

					$result = mysqli_query($mysqli, $query);

					if(!$result){
	                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
	                           " - ".mysqli_error($mysqli));
	                  } else {
	                    //tampil alert dan akan redirect ke halaman index.php
	                    //silahkan ganti index.php sesuai halaman yang akan dituju
	                  }
		}
			header("location:../pages/portofolio/daftar-portofolio");

		if($insert){
			$statusMsg = "The editor contect has been inserted";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
	
?>