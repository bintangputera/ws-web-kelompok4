<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; IdaBatik Bondowoso 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= $_ENV['admin_base_url']?>/action/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= $_ENV["admin_base_url"] ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= $_ENV["admin_base_url"] ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?= $_ENV["base_url"] ?>vendor/summernote/summernote.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= $_ENV["admin_base_url"] ?>js/demo/datatables-demo.js"></script>