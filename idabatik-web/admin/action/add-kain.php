<?php 

	include '../../db/connection.php';

		$jenis_kain = $_POST['jenis'];

		if (!empty($jenis_kain)) {
			// $insert = $mysqli->query("INSERT INTO jenis_kain(jenis_kain) VALUES 
			// 	('".$jenis_kain."')") or die (mysqli_error($mysqli));

			$insert = mysqli_query($mysqli, "INSERT INTO jenis_kain(jenis_kain) VALUES
				('".$jenis_kain."')");

			header("location:../pages/produk/jenis-kain.php");
		}

		if($insert){
			$statusMsg = "Data Berhasil dimasukkan";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
?>