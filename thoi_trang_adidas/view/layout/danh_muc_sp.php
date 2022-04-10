<style>
    .category_dm a {
        text-decoration: none;
        color: #0000CD;
    }

    .category_dm a:hover {
        color: #00BFFF;
    }
</style>


<div class="category_dm">
    <b><span>Danh Mục Sản Phẩm</span></b><br><br>

    <?php for ($i = 0; $i < count($ht_dm); $i++) { ?>
        <b><a href="danh_muc_sp.php?ma_dm=<?= $ht_dm[$i]['ma_dm']; ?>"><span><?= $ht_dm[$i]['ten_dm']; ?></span></a></b><br>
    <?php } ?>
</div><br><br><br>
<hr>