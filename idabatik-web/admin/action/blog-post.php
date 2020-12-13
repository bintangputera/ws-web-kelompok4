<?php 

	include '../../db/connection.php';

		$judul = $_POST['judul_blog'];
		$thumbnail = $_FILES['gambar']['name'];
		$kategori = $_POST['select_kategori'];
		$editorContent = $_POST['contentEditor'];
		$str = str_replace(" ", "-", $judul);
		$slug = strtolower($str);
		$date = date("d-m-Y");

		var_dump($date);

		if (!empty($thumbnail)) {
			$allowed_ext = array('png', 'jpg');
			$x = explode('.', $thumbnail);
			$ext = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];
			$angka_acak = rand(1, 999);

			$nama_gambar_baru = $angka_acak.'-'.$thumbnail;
			if (in_array($ext, $allowed_ext) == true) {
			 	move_uploaded_file($file_tmp, '../../uploaded-images/'. $nama_gambar_baru);

				$query = "INSERT INTO blog(id_kategori, judul, slug, thumbnail, konten_blog, created_at) VALUES 
					('".$kategori."', '".$judul."', '".$slug."', '".$nama_gambar_baru."', '".$editorContent."', '".$date."')";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../pages/blog/daftar-blog';</script>";
                  }
			 }else {
			 	echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../pages/blog/cms-blog';</script>";
			 }
		}else {
			$query = $mysqli->query("INSERT INTO blog(id_kategori, judul, thumbnail, konten_blog, created_at) VALUES 
						('".$kategori."', '".$judul."', '".$nama_gambar_baru."', '".$editorContent."', '".$date."')") or die (mysqli_error($mysqli));

					$result = mysqli_query($mysqli, $query);

					if(!$result){
	                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
	                           " - ".mysqli_error($mysqli));
	                  } else {
	                    //tampil alert dan akan redirect ke halaman index.php
	                    //silahkan ganti index.php sesuai halaman yang akan dituju
	                  }
		}
			header("location:../pages/blog/daftar-blog");

		if($insert){
			$statusMsg = "The editor contect has been inserted";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
	
?>