<?php include "../../db/connection.php" ?>
<?php 
    $title = "Portofolio | IdaBatik" ?>
<?php include "../../partial/header-html.php" ?>
<?php

    $result = mysqli_query($mysqli, "SELECT * FROM portofolio");

?>
<style>
    .image-crop{
        width:100px;
        height:400px;
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
    $is_blog = "no";
    include "../../partial/header-nav.php" ?>

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="row">
                        <?php
                            while($blog_list = mysqli_fetch_array($result)){
                                $judul = $blog_list['judul_portofolio'];
                                $thumbnail = $blog_list['thumbnail'];
                                $slug = $blog_list['slug'];
                                $created_at = $blog_list['created_at'];
                            ?>

                                <div class="col-lg-4 col-sm-4">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <img class="image-crop" src="<?= $_ENV['base_url']?>uploaded-images/portofolio/<?= $thumbnail ?>">
                                        </div>
                                        <div class="bi-text">
                                            <a href="<?= $_ENV['base_url'] ?>detail-portofolio/<?= $slug ?>">
                                                <h4><?= $judul ?></h4>
                                            </a>
                                            <p><?= $created_at ?> </span></p>
                                        </div>
                                    </div>
                                </div>
                            
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <?php include "../../partial/footer.php" ?>

</body>

</html>