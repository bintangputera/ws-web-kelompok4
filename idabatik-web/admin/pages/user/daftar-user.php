<?php include_once("../../../db/connection.php") ?>
<?php
  $title = "IdaBatik - Daftar User";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php

    $result = mysqli_query($mysqli, "SELECT user.id_user, level.ket_level, user.username, user.password FROM user INNER JOIN level ON user.id_level = level.id_level");

?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include_once("../../partial/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include_once("../../partial/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID User</th>
                      <th>Level</th>
                      <th>Username</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    while($item_data = mysqli_fetch_array($result)){

                      echo "<tr>";
                      echo "<td>".$item_data['id_user']."</td>";
                      echo "<td>".$item_data['ket_level']."</td>";
                      echo "<td>".$item_data['username']."</td>";
                      echo "<td>".$item_data['password']."</td>";
                      echo "</tr>"; 
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Content Row -->

        <div class="row">

          <!-- Content Row -->
          <div class="row">

          </div>
        <!-- /.container-fluid -->

        </div>
      <!-- End of Main Content -->

      <?php include_once("../../partial/footer.php") ?>

</body>

</html>
