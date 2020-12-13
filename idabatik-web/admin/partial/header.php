<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location: ".$_ENV['admin_base_url']."login.php?pesan=error");

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo $_ENV['admin_base_url'];?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo $_ENV['admin_base_url']; ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" href="<?= $_ENV['base_url'] ?>img/icon-web.png" type="image/png" sizes="16x16">
  <link href="<?= $_ENV['base_url'] ?>vendor/summernote/summernote.min.css" rel="stylesheet">

  <!-- Custom style for Pages -->
  <link href="<?php echo $_ENV['admin_base_url'];?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">