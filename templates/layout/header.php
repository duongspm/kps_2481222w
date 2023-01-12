<div class="header">
    <div class="wrapper">
        <div class="headerr">
            <div class="header__logo">
                <a href="" title="<?=trangchu?>">
                    <?=$func->getImage(['sizes' => '100x115x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <div class="header__banner">
                <a href="" title="<?=trangchu?>">
                    <?=$func->getImage(['sizes' => '710x90x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <div class="header__phone">
                <div class="header__phonecontent">
                    <span>hotline hỗ trợ:</span>
                    <a class="text-decoration-none"
                        href="tel:<?=$optsetting['hotline']?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
                    <a class="text-decoration-none"
                        href="tel:<?=$optsetting['phone']?>"><?=$func->formatPhone($optsetting['phone'])?></a>
                </div>
            </div>
        </div>
    </div>
</div>