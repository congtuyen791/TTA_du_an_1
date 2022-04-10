<?php
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
$ht_hht = top_10_hh();

?>

<b><span>Top 10 sản phẩm</span></b><br>
<div class="box_sp_anh">
    <?php for ($i = 0; $i < count($ht_hht); $i++) { ?>
        <div style="width:70px; height: 50px; margin: 10px 0 0 30px; float:left;">
            <a href="chitietsp.php?ma_hh=<?= $ht_hht[$i]['ma_hh']; ?>"> <img src="<?= $ht_hht[$i]['anh_hh']; ?>" alt="ảnh sản phẩm" style="width:50px; "></a>
        </div>
        <div style="width:75%; height: 50px;float: left;margin: 20px 0 0 -30px;">
            <b><a href="chitietsp.php?ma_hh=<?= $ht_hht[$i]['ma_hh']; ?>"><span><?= $ht_hht[$i]['ten_hh']; ?></span></a></b><br>
        </div>
    <?php } ?>
</div>