<?php
  session_start();

  include "../db/connection.php";

  if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
      header("location:../admin");
    }else{
      header("location:login.php?pesan=gagal");
    }
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

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-7 col-lg-10 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan'] == "gagal"){
                        echo "<div class='alert alert-danger' role='alert'>Username atau password anda salah</div>";
                      }else if($_GET['pesan'] == "logout"){
                        echo "<div class='alert alert-success' role='alert'>Logout Berhasil</div>";
                      }else if($_GET['pesan'] == "login_first"){
                        echo "<div class='alert alert-success' role='alert'>Silahkan login sebagai admin</div>";
                      }
                  }
                  ?>
                  <form class="user" method="post" action="login.php">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
