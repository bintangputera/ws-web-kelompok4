<?php 

	include '../../db/connection.php';

		$konten = $_POST['konten_tentang'];

		if (!empty($konten)) {
			// $insert = $mysqli->query("INSERT INTO jenis_kain(jenis_kain) VALUES 
			// 	('".$jenis_kain."')") or die (mysqli_error($mysqli));

			$insert = mysqli_query($mysqli, "UPDATE `tentang` SET `tentang` = '$konten' WHERE `tentang`.`id_tentang` = '1'");

			header("location: ".$_ENV['admin_base_url']."tentang");
		}

		if($insert){
			$statusMsg = "Data Berhasil dimasukkan";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
?>