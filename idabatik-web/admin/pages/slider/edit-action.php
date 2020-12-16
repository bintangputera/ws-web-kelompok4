<?php 

	include '../../../db/connection.php';

		$id = $_POST['id'];
		$title = $_POST['title'];
		$sub_title = $_POST['sub-title'];
		$thumbnail = $_FILES['thumbnail_gallery']['name'];

		if ($thumbnail != "") {
			$allowed_ext = array('png', 'jpg');
			$x = explode('.', $thumbnail);
			$ext = strtolower(end($x));
			$file_tmp = $_FILES['thumbnail_gallery']['tmp_name'];
			$angka_acak = rand(1, 999);

			$nama_gambar_baru = $angka_acak.'-'.$thumbnail;
			if (in_array($ext, $allowed_ext) == true) {
			 	move_uploaded_file($file_tmp, '../../../gallery/'. $nama_gambar_baru);

			 	$query = "UPDATE slider_gallery set title = '$title', sub_title = '$sub_title', file = '$nama_gambar_baru' ";
			 	$query .= "WHERE id_slider_gallery = '$id' ";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diubah.');window.location='../../slider';</script>";
                  }
			 }else {
			 	echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../slider';</script>";
			 }
	}else {
		$query = "UPDATE slider_gallery set title = '$title', sub_title = '$sub_title' ";
			 	$query .= "WHERE id_slider_gallery = '$id' ";

				$result = mysqli_query($mysqli, $query);

				if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                           " - ".mysqli_error($mysqli));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diubah.');window.location='../../slider';</script>";
                  }
	}
?>