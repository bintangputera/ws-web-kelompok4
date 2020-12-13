<?php 

	include '../../db/connection.php';

		$jenis_produk = $_POST['jenis'];

		if (!empty($jenis_produk)) {
			// $insert = $mysqli->query("INSERT INTO jenis_kain(jenis_kain) VALUES 
			// 	('".$jenis_kain."')") or die (mysqli_error($mysqli));

			$insert = mysqli_query($mysqli, "INSERT INTO jenis_produk(jenis_produk) VALUES
				('".$jenis_produk."')");

			header("location:../pages/produk/jenis-produk.php");
		}

		if($insert){
			$statusMsg = "Data Berhasil dimasukkan";
			echo $statusMsg;
		}else {
			$statusMsg = "Error";
			echo $statusMsg;
		}
?>