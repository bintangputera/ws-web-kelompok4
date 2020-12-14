<div class="filter-widget">
    <h4 class="fw-title">Categories</h4>
        <ul class="filter-catagories">
            <?php 
                $cat = mysqli_query($mysqli, "SELECT * FROM jenis_produk");
                while ($cat_list = mysqli_fetch_array($cat)) {
                ?>
                <li><a href="<?= $_ENV['base_url']?>kategori/<?= $cat_list['id_jenis'] ?>"><?= $cat_list['jenis_produk']?></a></li>
                <?php } ?>
        </ul>
</div>