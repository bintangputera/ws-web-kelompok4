<?php
    $active = "class='nav-item active'";
    $no_active = "class='nav-item'";
?>
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $_ENV['admin_base_url']; ?>index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IdaBatik</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li <?php echo ($title == "IdaBatik - Dashboard") ? $active : $no_active; ?>>
        <a class="nav-link" href="<?php echo $_ENV['base_url']; ?>/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Sanggar
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li <?php echo ($title == "IdaBatik - Daftar User" or $title == "IdaBatik - Level User") ? $active : $no_active; ?>>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Data User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>daftar-user">Daftar User</a>
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>level-user">Level User</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li <?php echo ($title == "IdaBatik - Tambah Barang" or $title == "IdaBatik - Daftar Barang") ? $active : $no_active; ?>>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-box-open"></i>
          <span>Data Produk</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>tambah-barang">Tambah Barang</a>
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>daftar-barang">Daftar Barang</a>
          </div>
        </div>
      </li>
      <li <?php echo ($title == "IdaBatik - Jenis Produk" or $title == "IdaBatik - Jenis Kain") ? $active : $no_active; ?>>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJenis" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Data Jenis</span>
        </a>
        <div id="collapseJenis" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>jenis-produk">Jenis Produk</a>
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>jenis-kain">Jenis Kain</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        CMS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li <?php echo ($title == "IdaBatik - Daftar Slider" or $title == "IdaBatik - Tambah Slider") ? $active : $no_active; ?>>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-images"></i>
            <span>Slider</span></a>
        </li>
      <li <?php echo ($title == "IdaBatik - Daftar Gallery" or $title == "IdaBatik - Tambah Gallery") ? $active : $no_active; ?>>
          <a class="nav-link" href="<?= $_ENV["admin_base_url"]?>galeri">
            <i class="fas fa-fw fa-image"></i>
            <span>Gallery</span></a>
        </li>
      <li <?php echo ($title == "IdaBatik - Daftar Blog" or $title == "IdaBatik - Tambah Blog" or $title == "IdaBatik - Kategori Blog" or $title == "IdaBatik - Edit Blog") ? $active : $no_active; ?>>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Blog</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>cms-blog">Tambah Blog Baru</a>
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>daftar-blog">Daftar Blog</a>
            <a class="collapse-item" href="<?= $_ENV["admin_base_url"] ?>kategori-blog">Kategori Blog</a>

          </div>
        </div>
        </li>
        
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->