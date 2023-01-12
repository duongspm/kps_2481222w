<div class="footer pd">
    <div class="wrapper">
        <div class="footerr mr-top ">
            <div class="footer-item footer-item1">
                <div class="footer-title">
                    <span>thông tin công ty</span>
                    <div class="footer_line">
                    </div>
                </div>
                <div class="footer-name">
                    <span><?=$footer['name'.$lang]?></span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <span>Chính sách</span>
                    <div class="footer_line">
                    </div>
                </div>
                <div class="footer__list">
                    <?php if(!empty($policy)){?>
                    <ul>
                        <?php foreach($policy as $v){?>
                        <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                                title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                        </li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <span>Dịch vụ</span>
                    <div class="footer_line">
                    </div>
                </div>
                <div class="footer__list">
                    <?php if(!empty($dichvulist)){?>
                    <ul>
                        <?php foreach($dichvulist as $v){?>
                        <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                                title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <div class="footer-fb">
                <div class="">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="500"
                        data-height="230" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="<?=$optsetting['fanpage']?>">
                                <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="wrapper copyrightt">
        <div class="copyright-left">
            <span>Copyright © 2022
                <span class="settingname">
                    <?=$setting['name'.$lang]?>
                </span>. Web design : Nina Co.,Ltd
            </span>
        </div>
        <div class="copyright-right">
            <span><?= dangonline ?>: <?= $online ?></span>|
            <span><?= homnay ?>: <?= $counter['today'] ?></span>|
            <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
        </div>
    </div>
</div>
<?php if (!empty($optsetting['coords_iframe'])){?>
<?= $addons->set('footer-map', 'footer-map', 6); ?>
<?php }?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>