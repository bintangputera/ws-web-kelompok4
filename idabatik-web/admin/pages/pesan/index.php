<?php include_once("../../../db/connection.php") ?>
<?php
  $title = "IdaBatik - Daftar Pesan";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php

    $result = mysqli_query($mysqli, "SELECT * FROM kontak");

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
            <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang Penjualan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Kontak</th>
                      <th>Nama Pengirim</th>
                      <th>Email</th>
                      <th>Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    while($item_data = mysqli_fetch_array($result)){

                      echo "<tr>";
                      echo "<td>".$item_data['id_kontak']."</td>";
                      echo "<td>".$item_data['nama']."</td>";
                      echo "<td>".$item_data['email']."</td>";
                      echo "<td>".substr($item_data['pesan'], 0,50)."....</td>";
                      echo "</tr>"; 
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->

        </div>
      <!-- End of Main Content -->

      <?php include_once("../../partial/footer.php") ?>

</body>

</html>
