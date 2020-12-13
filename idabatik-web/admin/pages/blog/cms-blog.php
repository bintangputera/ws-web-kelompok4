<?php include_once("../../../db/connection.php"); ?>
<?php
  $title = "IdaBatik - Tambah Blog";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php 
  $result = mysqli_query($mysqli, "SELECT * FROM kategori_blog");
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
            <h1 class="h3 mb-0 text-gray-800">Blog</h1>
          </div>

          <!-- Content Row -->
          <form method="post" action="<?= $_ENV['admin_base_url'] ?>action/blog-post.php" enctype="multipart/form-data">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Blog Baru</h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name" class="form-label">Judul Blog</label>
                  <input type="text" name="judul_blog" id="judul_blog" class="form-control form-control-user" placeholder="Judul Blog" required>
                </div>
                <div class="form-group">
                  <label for="thumbnail_blog" class="form-label">Thumbnail</label><br>
                  <input type="file" name="gambar" id="thumbnail" required>
                </div>
                <div class="form-group">
                  <label for="kategori_blog" class="form-label">Kategori Blog</label>
                  <select class="form-control" name="select_kategori" id="kategori_blog">
                    <?php 
                    while($item_data = mysqli_fetch_array($result)){
                      echo "<option value=".$item_data['id_kategori'].">".$item_data['kategori']."</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="summernote" class="form-label">Isi Konten</label>
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
