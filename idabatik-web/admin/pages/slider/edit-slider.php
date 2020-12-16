<?php include_once("../../../db/connection.php"); ?>
<?php
  $title = "IdaBatik - Edit Slider";
 ?>
<?php include_once("../../partial/header.php") ?>
<?php 
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "SELECT * FROM slider_gallery WHERE id_slider_gallery=$id");

  $count = mysqli_num_rows($result);

    if($count < 1) {
      header("location:../slider");
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
            <h1 class="h3 mb-0 text-gray-800">Slider</h1>
          </div>

          <!-- Content Row -->
          <form method="post" action="<?= $_ENV['admin_base_url'] ?>pages/slider/edit-action.php" enctype="multipart/form-data">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Slider</h6>
              </div>
              <div class="card-body">
                <?php     
                  $slider = mysqli_fetch_array($result);
                ?>
                <div class="form-group">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" id="title" value="<?= $slider['title']; ?>" class="form-control form-control-user" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="sub-title" class="form-label">Sub title</label>
                  <input type="text" name="sub-title" id="sub-title" value="<?= $slider['sub_title']; ?>" class="form-control form-control-user" placeholder="Judul Blog" required>
                </div>
                <div class="form-group">
                  <label for="thumbnail_gallery" class="form-label">Thumbnail</label><br>
                  <img src="<?= $_ENV['base_url']."gallery/".$slider['file'] ?>" class="img-fluid">
                </div>
                <div class="form-group">
                  <input type="file" name="thumbnail_gallery" id="thumbnail_gallery">
                </div>
                <input type="hidden" name="id" value="<?= $slider['id_slider_gallery'] ?>">
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
