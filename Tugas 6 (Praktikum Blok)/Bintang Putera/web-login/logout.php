<?php
    session_start();
    $msg = "Berhasil logout";
    $_SESSION['msg'] = $msg;
    header('location:login.php');
?>