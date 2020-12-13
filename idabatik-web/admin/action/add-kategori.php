<?php 

	include '../../db/connection.php';

		$kategori= $_POST['kategori'];

		if (!empty($kategori)) {
			// $insert = $mysqli->query("INSERT INTO jenis_kain(jenis_kain) VALUES 
			// 	('".$jenis_kain."')") or die (mysqli_error($mysqli));

			$insert = mysqli_query($mysqli, "INSERT INTO kategori_blog(kategori) VALUES
				('".$kategori."')");

			header("location:../pages/blog/kategori-blog.php");
		}

		if($insert){
			$statusMsg = "Data Berhasil dimasukkan";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
?>