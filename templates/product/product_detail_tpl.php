<div class="grid-pro-detail w-clear">
    <div class="row">
        <div class="left-pro-detail col-md-6 col-lg-5 mb-4">
            <a id="Zoom-1" class="MagicZoom"
                data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>"
                title="<?=$rowDetail['name'.$lang]?>">
                <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name'.$lang]])?>
            </a>
            <?php if($rowDetailPhoto) { if(count($rowDetailPhoto) > 0) { ?>
            <div class="gallery-thumb-pro">
                <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-xsm-items="5:10" data-sm-items="5:10"
                    data-md-items="5:10" data-lg-items="5:10" data-xlg-items="5:10" data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>"
                    data-navcontainer=".control-pro-detail">
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                            href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>"
                            title="<?=$rowDetail['name'.$lang]?>">
                            <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name'.$lang]])?>
                        </a>
                    </div>
                    <?php foreach($rowDetailPhoto as $v) { ?>
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                            href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>"
                            title="<?=$rowDetail['name'.$lang]?>">
                            <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name'.$lang]])?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div class="control-pro-detail control-owl transition"></div>
            </div>
            <?php } } ?>
        </div>

        <div class="right-pro-detail col-md-6 col-lg-7 mb-4">
            <p class="title-pro-detail mb-2"><?=$rowDetail['name'.$lang]?></p>

            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                    $params = array();
                    $params['oaid'] = $optsetting['oaidzalo'];
                    echo $func->markdown('social/share', $params);
                ?>
            </div>
            <ul class="attr-pro-detail">

                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                    <div class="attr-content-pro-detail"><?=$rowDetail['view']?></div>
                </li>
            </ul>

            <br>
            <div>
                <?=(!empty($rowDetail['desc'.$lang])) ? nl2br(htmlspecialchars_decode($rowDetail['desc'.$lang])) : ''?>
            </div>

        </div>
    </div>

    <div class="tags-pro-detail w-clear">
        <?php if(!empty($rowTags)) { foreach($rowTags as $v) { ?>
        <a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><i
                class="fas fa-tags"></i><?=$v['name'.$lang]?></a>
        <?php } } ?>
    </div>

    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail"
                    role="tab"><?=thongtinsanpham?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail"
                    role="tab"><?=binhluan?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                <?=htmlspecialchars_decode($rowDetail['content'.$lang])?>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3"
                    data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>


</div>

<div class="title-main"><span>Sản phẩm cùng loại</span></div>
<div class="grid-page-pro w-clear">
    <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
    <div class="productt">
        <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
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
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>