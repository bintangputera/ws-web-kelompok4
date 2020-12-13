<?php include_once("../../../db/connection.php") ?>
<?php
  $title = "IdaBatik - Jenis Kain";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php

    $result = mysqli_query($mysqli, "SELECT * FROM jenis_kain");

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
              <h6 class="m-0 font-weight-bold text-primary">Tabel Level User</h6>
            </div>
            <div class="card-body">
              <div class="float-right">
                <button class="btn btn-primary me-md-2 d-sm-inline-block " type="button" data-toggle="modal" data-target="#addJenisModal">
                  <i class="fa fa-plus fa-sm"></i> Tambah Level
                </button>
              </div>
              <div class="table-responsive">
                <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Jenis</th>
                      <th>Jenis Produk</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    while($item_data = mysqli_fetch_array($result)){

                      echo "<tr>";
                      echo "<td>".$item_data['id_jenis_kain']."</td>";
                      echo "<td>".$item_data['jenis_kain']."</td>";
                      echo "<td><a href='edit-barang.php?id=$item_data[id_jenis_kain]' class='btn btn-primary'><i class='fa fa-edit'></i></a></td>";
                      echo "</tr>"; 
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Tambah Modal-->
          <div class="modal fade" id="addJenisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="<?= $_ENV['admin_base_url'] ?>action/add-kain.php" method="POST">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Kain</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Jenis Kain</label>
                            <input type="text" name="jenis" id="name" class="form-control form-control-user" placeholder="Contoh : Kain Sutra" required>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

      <?php include_once("../../partial/footer.php") ?>

</body>

</html>
