<?php include_once("../../../db/connection.php"); ?>
<?php
  $title = "IdaBatik - Tambah Portofolio";
 ?>
<?php include_once("../../partial/header.php") ?>
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
            <h1 class="h3 mb-0 text-gray-800">Portofolio</h1>
          </div>

          <!-- Content Row -->
          <form method="post" action="<?= $_ENV['admin_base_url'] ?>action/add-portofolio.php" enctype="multipart/form-data">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Portofolio</h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name" class="form-label">Judul Portofolio</label>
                  <input type="text" name="judul_portofolio" id="judul_portofolio" class="form-control form-control-user" placeholder="Judul Portofolio" required>
                </div>
                <div class="form-group">
                  <label for="thumbnail_blog" class="form-label">Thumbnail</label><br>
                  <input type="file" name="gambar" id="thumbnail" required>
                </div>
                <div class="form-group">
                  <label for="summernote" class="form-label">Deskripsi</label>
                  <textarea id="summernote" name="contentEditor"></textarea>
                </div>
                <button class="btn btn-primary" style="margin-top: 16px" type="submit" name="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      <!-- End of Main Content -->

      <?php include_once("../../partial/footer.php") ?>

      <script>
        $(document).ready(function() {
          $('#summernote').summernote();
        });
      </script>

</body>

</html>
