<?php
	include "db/connection.php";
	$title = "Halaman Tidak Ditemukan | IdaBatik";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $title ?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/styles.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1>oops!</h1>
			<h2>Error 404 : Halaman Tidak Ditemukan</h2>
			<a href="<?= $_ENV['base_url'] ?>">Kembali</a>
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/idabatikbondowoso/"><i class="fa fa-instagram"></i></a>
				<a href="https://api.whatsapp.com/send?phone=6285258808776&text=Halo Mau mesen&app_absent=0"><i class="fa fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
