<div class="title-main"><span>Chứng nhận</span></div>
<div class="content-main album-gallery form-row w-clear">
    <?php if(!empty($chungnhan)) { foreach($chungnhan as $k => $v) { ?>
    <div class="chungnhan--item col-6 col-md-4 col-lg-3 col-xl-3">
        <a class=" scale-img mb-0" href="<?=ASSET.UPLOAD_PHOTO_L.$v['photo']?>" title="<?=$v['name'.$lang]?>">
            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '285x365x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
        </a>
        <div class="chungnhan__name">
            <span>
                <?= $v['name'.$lang]?>
            </span>
        </div>
    </div>
    <?php } } else { ?>
    <div class="col-12">
        <div class="alert alert-warning w-100" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    </div>
    <?php } ?>
</div>