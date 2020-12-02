<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('pages/header.php') ?>
<body class="animsition">
    <div class="page-wrapper">
        
        <?php include_once('pages/mobile-header.php'); ?>
        
        <?php include_once('pages/sidebar.php'); ?>
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <?php include_once('pages/desktop-header.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                    <div class="user-data m-b-30">
                                        <h3 class="title-3 m-b-30">
                                            <i class="fas fa-warehouse"></i>Tabel Barang</h3>
                                        <div class="table-responsive table-data">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>Jenis</td>
                                                        <td>Harga</td>
                                                        <td>Nama</td>
                                                        <td>Jenis</td>
                                                        <td>Harga</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bintang</td>
                                                        <td>Mahasiswa</td>
                                                        <td>15000</td>
                                                        <td>Bintang</td>
                                                        <td>Mahasiswa</td>
                                                        <td>15000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="user-data__footer">
                                            <button class="au-btn au-btn-load">load more</button>
                                        </div>
                                    </div>
                                <!-- END USER DATA-->
                            </div>
                        </div>

                        <?php include_once('pages/footer.php') ?>
                        
                        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
                        <script>
                            $(function () {
                                $('#example2').DataTable({
                                "paging": true,
                                "lengthChange": false,
                                "searching": true,
                                "ordering": false,
                                "info": true,
                                "autoWidth": false,
                                "responsive": true,
                                });
                            });
                        </script>

</body>

</html>
<!-- end document-->
