<div class="footer">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item footer-item1">
                <div class="footer-name">
                    <span><?=$footer['name'.$lang]?></span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                <div class="footer__map">
                    <div>
                        <img src="assets/images/images/icon-map.png" alt="">
                    </div>
                    <a class="text-decoration-none" target="_blank"
                        href="https://www.google.com/maps/dir/?api=1&amp;origin=&amp;destination=<?= $optsetting['address'] ?>"
                        title="Map">Xem bản đồ</a>
                </div>
            </div>
            <div class="footer-item footer-dk">
                <div class="footer-title">
                    <span>Đăng ký nhận tin</span>
                </div>
                <div class="footer__form">
                    <form class="validation-newsletter" novalidate method="post" action=""
                        enctype="multipart/form-data">
                        <div class="dangky__form">
                            <div class="newsletter-input">
                                <input type="text" class="form-controld" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="Họ tên*" required />
                                <div class="invalid-tooltip">Vui lòng nhập họ và tên</div>
                            </div>
                            <div class="newsletter-input">
                                <input type="number" class="form-controld"
                                    value="<?=(!empty($flash->has('phone'))) ? $flash->get('phone') : ''?>"
                                    id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại*"
                                    required />
                                <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                            </div>


                            <div class="newsletter-input">
                                <textarea type="text" class="form-controldd" id="content-newsletter"
                                    name="dataNewsletter[content]" placeholder="Nội dung*" required></textarea>
                                <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                            </div>
                            <div class="newsletter-button">
                                <input type="submit" class="btnd" name="submit-newsletter" value="GỬI" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-fb">
                <div class="">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="295"
                        data-height="215" data-small-header="true" data-adapt-container-width="true"
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
            <span>Copyright © <?=date("Y",time())?>
                <span class="settingname">
                    <?=$setting['name'.$lang]?>
                </span>. Web design : Nina Co.,Ltd
            </span>
        </div>
        <div class="footer-social">

            <?php if(!empty($social)){foreach($social as $v){?>
            <a href="<?=$v['link']?>" class="social-item text-decoration-none">
                <?= $func->getImage(['class' => 'w-100', 'sizes' => '40x40x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]]) ?>
            </a>
            <?php }}?>
        </div>
        <div class="copyright-right">
            <span><?= dangonline ?>: <?= $online ?></span> |
            <span><?= homnay ?>: <?= $counter['today'] ?></span> |
            <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
        </div>
    </div>
</div>

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