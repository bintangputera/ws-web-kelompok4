<?php 
    include "../../db/connection.php";
    $title = "Galeri | IdaBatik";

    $query = mysqli_query($mysqli, "select produk.id_produk, produk.nama_produk, produk.slug, jenis_produk.jenis_produk, jenis_kain.jenis_kain, produk.harga, produk.deskripsi, produk.thumbnail from ((produk Inner join jenis_produk on produk.id_jenis = jenis_produk.id_jenis) INNER JOIN jenis_kain on produk.id_jenis_kain = jenis_kain.id_jenis_kain)");

    $query_total_produk = mysqli_query($mysqli, "SELECT COUNT(id_produk) as total FROM produk");
    $total_produk = mysqli_num_rows($query_total_produk);

    include "../../partial/header-html.php";
?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
        $is_blog = "no";
        include "../../partial/header-nav.php";
    ?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">

                    <?php include "../../partial/sidebar-gallery.php" ?>

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-list">
                        <div class="row">
                            <?php 
                                while ($produk = mysqli_fetch_array($query)) {
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img width="108px" height="260px" src="<?= $_ENV['base_url']."uploaded-images/product/".$produk['thumbnail']?>" alt="">
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                            <li class="quick-view"><a href="<?= $_ENV['base_url']?>produk/<?= $produk['slug'] ?>">Lihat Detail</a>
                                            </li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?= $produk['jenis_produk'] ?></div>
                                        <a href="#">
                                            <h5><?= $produk['nama_produk'] ?></h5>
                                        </a>
                                        <div class="product-price">
                                            Rp. <?= $produk['harga'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    <?php 
        include "../../partial/footer.php";
    ?>
</body>

</html>