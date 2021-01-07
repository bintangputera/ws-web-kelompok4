<?php include_once("../../../db/connection.php") ?>
  <?php $title = "IdaBatik - Tambah Barang"; ?>
<?php include_once("../../partial/header.php") ?>
<?php

  $result = mysqli_query($mysqli, "select produk.id_produk, produk.nama_produk, jenis_produk.jenis_produk, produk.harga from produk Inner join jenis_produk on produk.id_jenis = jenis_produk.id_jenis");

?>
<?php 
  $jenis = mysqli_query($mysqli, "SELECT * FROM jenis_produk");
?>
<?php
  $jenis_kain = mysqli_query($mysqli, "SELECT * FROM jenis_kain");
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
            <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Area chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Produk</h6>
                  <div class="dropdown no-arrow">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>

                <div class="card-body">
                  <form action="<?= $_ENV['admin_base_url']?>action/add-barang.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name" class="form-label">Nama Produk</label>
                          <input type="text" name="nama_produk" id="name" class="form-control form-control-user" placeholder="Nama Produk" required>
                      </div>
                      <div class="form-group">
                          <label for="jenis_produk" class="form-label">Jenis Produk</label>
                          <select class="form-control" name="select_jenis" id="jenis_produk">
                            <?php 
                              while ($jenis_produk = mysqli_fetch_array($jenis)) {
                                echo "<option value=".$jenis_produk['id_jenis'].">".$jenis_produk['jenis_produk']."</option>";
                              }
                            ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="jenis_produk" class="form-label">Jenis Kain</label>
                          <select class="form-control" name="select_jenis_kain" id="jenis_kain">
                            <?php 
                              while ($jeniskain = mysqli_fetch_array($jenis_kain)) {
                                echo "<option value=".$jeniskain['id_jenis_kain'].">".$jeniskain['jenis_kain']."</option>";
                              }
                            ?>
                          </select>
                      </div>
                      <div class="form-group"style="margin-bottom: 12px">
                          <label for="gambar" class="form-label">Gambar Produk</label><br>
                          <input type="file" id="gambar" name="gambar"/>
                      </div>
                      <div class="form-group">
                          <label for="name" class="form-label">Harga Produk</label>
                          <input type="text" name="harga" id="harga" class="form-control form-control-user" placeholder="Nama Produk" required>
                      </div>
                      <div class="form-group">
                          <label for="thumbnail" class="form-label">Deskripsi</label>
                          <textarea name="deskripsi" id="controlTextArea" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group-row">
                          <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.Content Row -->

        </div>
      <!-- End of Main Content -->

      <?php include_once("../../partial/footer.php") ?>

</body>

</html>
