<?php include_once("../../../db/connection.php") ?>
<?php
  $title = "IdaBatik - Daftar Barang";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php

    $result = mysqli_query($mysqli, "select produk.id_produk, produk.nama_produk, jenis_produk.jenis_produk, jenis_kain.jenis_kain, produk.harga, produk.deskripsi, produk.thumbnail from ((produk Inner join jenis_produk on produk.id_jenis = jenis_produk.id_jenis) INNER JOIN jenis_kain on produk.id_jenis_kain = jenis_kain.id_jenis_kain)");

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
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>Jenis Produk</th>
                      <th>Jenis Kain</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Thumbnail</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    while($item_data = mysqli_fetch_array($result)){

                      echo "<tr>";
                      echo "<td>".$item_data['id_produk']."</td>";
                      echo "<td>".$item_data['nama_produk']."</td>";
                      echo "<td>".$item_data['jenis_produk']."</td>";
                      echo "<td>".$item_data['jenis_kain']."</td>";
                      echo "<td>".$item_data['harga']."</td>";
                      echo "<td>".substr($item_data['deskripsi'], 0,50)."....</td>";
                      echo "<td><img style='width:50px;height:50px' src=".$_ENV['base_url']. "uploaded-images/product/".$item_data['thumbnail']."></td>";
                      echo "<td><a href='edit-barang.php?id=$item_data[id_produk]' class='btn btn-primary'><i class='fa fa-edit'></i></a></td>";
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
