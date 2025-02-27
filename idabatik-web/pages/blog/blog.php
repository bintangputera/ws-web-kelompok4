<?php 
    include "../../db/connection.php";

    $slug = $_GET['slug'];
    // var_dump($_GET) ;

    $result = mysqli_query($mysqli, "SELECT blog.id_blog, kategori_blog.kategori, blog.judul, blog.thumbnail, blog.konten_blog, blog.created_at FROM blog INNER JOIN kategori_blog ON blog.id_kategori = kategori_blog.id_kategori WHERE slug = '".$slug."'");


    $cek = mysqli_num_rows($result);

    if ($cek < 1) {
        header("location:".$_ENV['base_url']."blog/");
    }

    while ($blog = mysqli_fetch_array($result)) {
        $judul = $blog['judul'];
        $thumbnail = $blog['thumbnail'];
        $konten = $blog['konten_blog'];
        $kategori = $blog['kategori'];
        $created_at = $blog['created_at'];
    }

    $title = $judul." | IdaBatik";

    include "../../partial/header-html.php";

?>


<style>
    .image-crop{
        width:100%;
        height:500px;
        background-position:center center;
        background-repeat: no-repeat;
        object-fit: cover;
    }
</style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
        $is_blog = "yes";
        include "../../partial/header-nav.php";
    ?>

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2><?= $judul ?></h2>
                            <p><?= $kategori ?> <span>- <?= $created_at ?></span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img class="image-crop" src="<?= $_ENV['base_url'] ?>uploaded-images/blog/<?= $thumbnail ?>" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <?= $konten ?>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><?= $kategori ?></li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <?php include "../../partial/footer.php" ?>

</body>

</html>