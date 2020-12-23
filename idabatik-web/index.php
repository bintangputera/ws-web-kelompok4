 <?php include "db/connection.php" ?>
<?php 
    $title = "IdaBatik Bondowoso";
    $data = mysqli_query($mysqli, "select produk.id_produk, produk.nama_produk, produk.slug, jenis_produk.jenis_produk, jenis_kain.jenis_kain, produk.harga, produk.deskripsi, produk.thumbnail from ((produk Inner join jenis_produk on produk.id_jenis = jenis_produk.id_jenis) INNER JOIN jenis_kain on produk.id_jenis_kain = jenis_kain.id_jenis_kain)");
    $query = mysqli_query($mysqli, "SELECT * FROM slider_gallery");
   
?>
<?php include "partial/header-html.php" ?>
<?php

    $result = mysqli_query($mysqli, "SELECT blog.id_blog, kategori_blog.kategori, blog.slug, blog.judul, blog.thumbnail, blog.konten_blog, blog.created_at FROM blog INNER JOIN kategori_blog ON blog.id_kategori = kategori_blog.id_kategori ORDER BY created_at DESC");

?>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
    $is_blog = "no";
    include "partial/header-nav.php" ?>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <?php 
                while ($gallery = mysqli_fetch_array($query)) {
            ?>
            <div class="single-hero-items set-bg" data-setbg="<?= $_ENV['base_url'].'gallery/'.$gallery['file'] ?>">
                <div class="container"s>
                    <div class="row">
                        <div class="col-lg-5">
                            <h1 style="color: #fff"><?= $gallery['title'] ?></h1>
                            <p style="color: #fff"><?= $gallery['sub_title'] ?></p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
        <div class="row">
                <?php
                    while ($galeri = mysqli_fetch_array($data)) { 
                ?>
                <div class="col-lg-4 col-sm-6">
                <a href="<?=$_ENV['base_url']?>pages/galeri/">
                    <div class="single-banner">
                        <img width="108px" height="260px" src="<?= $_ENV['base_url']."img-uploaded/".$galeri['thumbnail']?>" alt="">
                        <div class="inner-text">
                            <h4><?= $galeri['jenis_produk'] ?></h4>
                        </div>
                    </div>
                    </a>
                </div>
                <?php }?>
        </div>     
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">    
                    </div>
                    <div class="product-slider owl-carousel">
                            <?php include "partial/product.php";
                                while ($produk = mysqli_fetch_array($query)) {
                            ?>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img  src="<?= $_ENV['base_url']."img-uploaded/".$produk['thumbnail']?>" alt="">
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
                                <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/tentang1.jpg">
                        <h2>Ida Batik</h2>
                        <a href="<?= $_ENV['base_url'] ?>galeri/">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/e35/28434593_164416587550253_5680107760927113216_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=105&_nc_ohc=S5I07cNPJnAAX-hr1fo&tp=1&oh=e0f927c96173b58995253ea972e185ac&oe=60074AD8">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idabatikbondowoso</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/90064805_626090854622645_1307955299742785251_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=105&_nc_ohc=79GiknaUMWwAX-FhfsJ&tp=1&oh=fd1ca60a3e63c4cff72c0a4bf269b20e&oe=600508D3">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idabatikbondowoso</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/e35/47168515_749592598729735_1693924354012393428_n.jpg?_nc_ht=scontent-sin6-1.cdninstagram.com&_nc_cat=107&_nc_ohc=WOrs7hJ5slwAX-2R4rf&tp=1&oh=888fc3cc35a357b88c78bf71cd13cc92&oe=60064201">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idabatikbondowoso</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/e35/88181670_192883271941268_5097711966474785998_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=108&_nc_ohc=-jr_1FyosPAAX8Ax-TS&tp=1&oh=79066e2e0b2c2dfbc82a2a8918751839&oe=60064B41">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idabatikbondowoso</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/89434099_2668022563421055_4283339470004251043_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com&_nc_cat=103&_nc_ohc=GBhBI7x2U_kAX-llODu&tp=1&oh=a4488ba9e4adef6ede0196bb85694c17&oe=60063B7F">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idabatikbondowoso</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="https://scontent-sin6-3.cdninstagram.com/v/t51.2885-15/e35/p1080x1080/89710538_661130037976762_103994847833051677_n.jpg?_nc_ht=scontent-sin6-3.cdninstagram.com&_nc_cat=110&_nc_ohc=4tzOHOkE-gwAX9K9ynw&tp=1&oh=589868dbaf2f3d078964b85a1a959cf2&oe=60073874">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/idabatikbondowoso/">idaBatik_collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Blog Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php for($i = 1; $i<4;$i++){ 
                    $blog = mysqli_fetch_array($result);
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="<?= $_ENV['base_url']."uploaded-images/".$blog['thumbnail']?>" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?= $blog['created_at'] ?>
                                </div>
                            </div>
                            <a href="<?= $_ENV['base_url']."detail-blog/".$blog['slug']?>">
                                <h4><?= $blog['judul']?> </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Terpercaya</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/Terpercaya-1.jpg" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Berkualitas</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Bahan bagus</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <?php include "partial/footer.php" ?>
</body>
    <script async src="//www.instagram.com/embed.js"></script>  
</html>