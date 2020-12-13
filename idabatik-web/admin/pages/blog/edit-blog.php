<?php include_once("../../../db/connection.php"); ?>
<?php
  $title = "IdaBatik - Edit Blog";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php 
  if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $judul = $_POST['judul_blog'];
    $kategori = $_POST['select_kategori'];
    $thumbnail = "halo.jpg";
    $content = $_POST['contentEditor'];

    // updating data
    $result = mysqli_query($mysqli, "UPDATE blog SET id_kategori='$kategori', judul='$judul', thumbnail='$thumbnail', konten_blog='$content' WHERE id_blog=$id");

    header("location:daftar-blog");
  }
?>
<?php 
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "SELECT blog.id_blog, blog.id_kategori, kategori_blog.kategori, blog.judul, blog.thumbnail, blog.konten_blog, blog.created_at from blog INNER JOIN kategori_blog ON blog.id_kategori = kategori_blog.id_kategori WHERE id_blog=$id");

  while($user_data = mysqli_fetch_array($result)){
    $judul = $user_data['judul'];
    $id_kategori = $user_data['id_kategori'];
    $kategori = $user_data['kategori'];
    $thumbnail = $user_data['thumbnail'];   
    $konten_blog = $user_data['konten_blog'];
    $created_at = $user_data['created_at'];
  }
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
          <form method="post" action="../edit-blog.php">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Blog</h6>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name" class="form-label">Judul Blog</label>
                  <input type="text" name="judul_blog" id="judul_blog" value="<?= $judul; ?>" class="form-control form-control-user" placeholder="Judul Blog" required>
                </div>
                <div class="form-group">
                  <label for="thumbnail_blog" class="form-label">Thumbnail</label><br>
                  <input type="file" name="thumbnail_blog" id="thumbnail">
                </div>
                <div class="form-group">
                  <label for="kategori_blog" class="form-label">Jenis Produk</label>
                  <select class="form-control" name="select_kategori" id="kategori_blog">
                    <?php 
                      $res = mysqli_query($mysqli, "SELECT * from kategori_blog");
                    ?>
                    <?php 
                    while($item_data = mysqli_fetch_array($res)){

                      echo "<option value=".$item_data['id_kategori'].">".$item_data['kategori']."</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="summernote" class="form-label">Isi Konten</label>
                  <textarea id="summernote" name="contentEditor"><?= $konten_blog ?></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <button class="btn btn-primary" style="margin-top: 16px" type="submit" name="update">Update</button>
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
