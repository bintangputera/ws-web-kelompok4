<?php 

	include '../../db/connection.php';

		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];

		if (!empty($nama) && !empty($email) && !empty($pesan)) {
			// $insert = $mysqli->query("INSERT INTO kontak(kontak) VALUES 
			// 	('".$kontak."')") or die (mysqli_error($mysqli));

			$insert = mysqli_query($mysqli, "INSERT INTO kontak(nama, email, pesan) VALUES
				('".$nama."', '".$email."', '".$pesan."')");

			header("location: ".$_ENV['base_url']."kontak ");
		}

		if($insert){
			$statusMsg = "Data Berhasil dimasukkan";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
?>