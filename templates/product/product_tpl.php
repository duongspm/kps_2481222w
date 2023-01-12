<div class="title-main"><span>Dự án</span></div>
<div class="content-main w-clear">
    <div class="row">
        <div class="grid-page-pro">
            <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
            <div class="productt">
                <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>"
                    title="<?= $v['name' . $lang] ?>">
                    <div class="pic-product">
                        <div class="zoom_hinh hover_sang">
                            <?= $func->getImage(['sizes' => '286x283x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                    </div>

                    <h3 class="name-product text-split"><?= $v['name' . $lang] ?></h3>
                    <div class="price-product">
                        <?php if($v['discount']) { ?>
                        <span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
                        <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                        <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                        <?php } else { ?>
                        <span
                            class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : "Liên hệ: " . $func->formatPhone($optsetting['hotline'])?></span>
                        <?php } ?>
                    </div>
                </a>
            </div>
            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>