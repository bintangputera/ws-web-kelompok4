<?php include "../../db/connection.php" ?>
<?php $title = "Kontak Kami | IdaBatik" ?>
<?php include "../../partial/header-html.php" ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
    $is_blog = "no";
    include "../../partial/header-nav.php" ?>

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.893927614915!2d113.82596641406377!3d-8.009874382140401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c37aa6480a57%3A0x1e8aa1f722623275!2sIda%20Batik!5e0!3m2!1sen!2sid!4v1607786380707!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>KONTAK KAMI</h4>
                        <p>Hubungi kami melalui kontak dibawah ini :</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Alamat:</span>
                                <p>Karang Tengah, Kalianyar, Tamanan, Kabupaten Bondowoso, Jawa Timur 68263</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Nomor Telepon:</span>
                                <p>+62 852-5880-8776</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>idabatik.bondowoso@gmail.com</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="ci-text">
                                <span>Instagram:</span>
                                <p>@idabatikbondowoso</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>KRITIK DAN SARAN</h4>
                            <p>Kirim Kritik dan Saran kalian disini !!</p>
                            <form action="<?php echo $_ENV['admin_base_url'] ?>action/add-kontak.php" method="post" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nama" name="nama">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Pesan" name="pesan"></textarea>
                                        <button type="submit" class="site-btn">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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