<?php
    $active = "class='nav-item active'";
    $no_active = "class='nav-item'";
?>
<!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        idabatik.bondowoso@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +62 852-5880-8776
                    </div>
                </div>
                <div class="ht-right">
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="https://www.instagram.com/idabatikbondowoso"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo" style="padding: 4px !important">
                            <a href="<?= $_ENV['base_url'] ?>">
                                <img src="<?= $_ENV['base_url'] ?>img/log.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="Batik apa yang anda cari">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li <?php echo ($title == "IdaBatik Bondowoso") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>">Home</a></li>
                        <li <?php echo ($title == "Galeri | IdaBatik") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>galeri/">Galeri</a></li>
                        <li <?php echo ($title == "Koleksi | IdaBatik") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>portofolio/">Porto</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li <?php echo ($title == "Blog | IdaBatik") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>blog/">Blog</a></li>
                        <li <?php echo ($title == "Kontak Kami | IdaBatik") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>kontak/">Kontak</a></li>
                        <li <?php echo ($title == "Tentang | IdaBatik") ? $active : $no_active; ?>><a href="<?= $_ENV['base_url'] ?>tentang/">Tentang</a>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->