<div class="about pd">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <?php if(!empty($about[0])){?>
                <div class="about__left-img">
                    <a href="<?=$about[0][$sluglang]?>" title="<?=$about[0]['name'.$lang]?>"
                        class="about--img text-decoration-none">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '650x440x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                    </a>
                </div>
                <?php }?>

            </div>
            <div class="about__right">
                <div class="about__right--top">

                    <span class="about__title">
                        Giới thiệu
                    </span>

                    <span class="about__desc">
                        <?php 
                            $str =  $about[0]['name'.$lang]; //CÔNG TY TNHH DV BV KPS VIỆT NAM
                            echo substr($str, 0, -14);
                        ?>
                        <span>
                            <?php 
                                $student =  $about[0]['name'.$lang];
                                $str = substr($student ,-15);
                                echo $str;
                            ?>
                        </span>

                    </span>
                </div>
                <div class="about__right--icon">
                    <img src="assets/images/images/icon-about.png" alt="">
                </div>
                <div class="about__content">
                    <span>
                        <?=$about[0]['desc'.$lang]?>
                    </span>
                </div>

                <div class="about__btn">
                    <a href="gioi-thieu" title="Giới Thiệu"
                        class=" button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                            Thêm</span>
                        <img src="assets/images/images/icon-xemthem.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="dichvu pd">
    <div class="wrapper">
        <div class="heading">
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
            <span class="heading__title">
                bảo vệ Kbs
            </span>
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
        </div>
        <div class="dichvu__slogan">
            <span>
                <?=$slogandichvu['name'.$lang]?>
            </span>
        </div>
        <?php if(!empty($dichvu)){?>
        <div class="dichvu__list">
            <?php foreach($dichvu as $v){?>
            <div class="dichvu__item">
                <a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <div class="dichvu__img scale-img effect10">
                        <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => false, 'prefix' => 'product', 'sizes' => '315x317x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <div class="dichvu__content">
                        <span class="dichvu__name">
                            <?=$v['name'.$lang]?>
                        </span>
                        <span class="dichvu__desc">
                            <?=$v['desc'.$lang]?>
                        </span>
                    </div>
                </a>
            </div>
            <?php }?>

        </div>
        <?php }?>
    </div>
</div>
<div class="tieuchi pd-bottom">
    <div class="wrapper">
        <div class="tieuchi__list">
            <?php if (count($tieuchi)) { ?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:20" data-sm-items="3:20" data-md-items="4:50"
                data-lg-items="4:80" data-xlg-items="4:100" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-thuonghieu">
                <?php foreach ($tieuchi as $v) { ?>
                <div>
                    <div class="tieuchi__item">
                        <div class="tieuchi__img">
                            <?= $func->getImage(['class' => 'w-100 lazy', 'sizes' => '88x80x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="tieuchi__content">
                            <span class="tieuchi__name">
                                <?=$v['name' . $lang]?>
                            </span>
                            <span class="tieuchi__desc">
                                <?=$v['desc' . $lang]?>

                            </span>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="hinhanh pd">
    <div class="wrapper">
        <div class="heading">
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
            <span class="heading__title">
                hình ảnh hoạt động
            </span>
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
        </div>
        <div class="hinhanh__list">
            <?php if(!empty($thuvienanh)) { for ($i=0; $i < 6; $i++) { 
            ?>
            <?php if(!empty($thuvienanh[$i])){?>
            <div class="album">
                <a class="text-decoration-none album-image scale-img effect10" href="<?=$thuvienanh[$i][$sluglang]?>"
                    title="<?=$thuvienanh[$i]['name'.$lang]?>">
                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '420x317x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[$i]['photo'], 'alt' => $thuvienanh[$i]['name'.$lang]])?>
                </a>
                <h3 class="album-name "><a class="text-decoration-none" href="<?=$thuvienanh[$i][$sluglang]?>"
                        title="<?=$thuvienanh[$i]['name'.$lang]?>"><?=$thuvienanh[$i]['name'.$lang]?></a></h3>
            </div>
            <?php } ?>

            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>

        </div>
        <?php if(count($thuvienanh)>6){?>
        <div class="hinhanh__xemthem">
            <a href="thu-vien-anh" title="Album ảnh"
                class=" button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                    Thêm</span>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<div class="chungnhan ">
    <div class="wrapper pd">
        <div class="heading ">
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
            <span class="heading__title">
                chứng nhận
            </span>
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
        </div>
        <div class="chungnhan__list ">
            <?php if (!empty($chungnhan)) { ?>
            <div class="owl-page owl-carousel owl-theme album-gallery" data-xsm-items="2:20" data-sm-items="2:20"
                data-md-items="3:20" data-lg-items="4:26" data-xlg-items="4:26" data-rewind="1" data-autoplay="1"
                data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navtext="<img src='assets/images/images/prev.png'>|<img src='assets/images/images/next.png'>"
                data-navcontainer=".control-chungnhan">
                <?php foreach ($chungnhan as $v) { ?>
                <div>
                    <div class="album">
                        <a class="album-image scale-img" href="<?=ASSET.UPLOAD_PHOTO_L.$v['photo']?>"
                            title="<?=$v['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '285x365x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="control-chungnhan control-owl transition"></div>

            <?php } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="lydo pd">
    <div class="wrapper">
        <div class="heading ">
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
            <span class="heading__title">
                Lý do chọn bảo vệ KPS
            </span>
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
        </div>
        <?php if (!empty($lydo)) { ?>
        <div class="lydo__list">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10" data-md-items="3:10"
                data-lg-items="4:13" data-xlg-items="4:13" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<img src='assets/images/images/prev.png'>|<img src='assets/images/images/next.png'>"
                data-navcontainer=".control-lydo">
                <?php foreach ($lydo as $v) { ?>
                <div class="lydo__item">
                    <a class="lydo__img text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '33x33x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                    <div class="lydo__content">
                        <a href="<?=$v[$sluglang]?>" class="text-decoration-none lydo__name">
                            <?=$v['name'.$lang]?>
                        </a>
                        <span class="lydo__desc">
                            <?=$v['desc'.$lang]?>
                        </span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="blog">
    <div class="wrapper pd">
        <div class="heading ">
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
            <span class="heading__title">
                tin tức sự kiện
            </span>
            <div class="heading__line">
                <img src="assets/images/images/line-left.png" alt="">
            </div>
        </div>
        <div class="blog__list">

            <?php if(!empty($newsnb)){?>
            <?php for ($i=0; $i < 6; $i++) { ?>
            <?php if(!empty($newsnb[$i])){?>
            <div class="blog__item">
                <a href="<?=$newsnb[$i][$sluglang]?>" class="text-decoration-none"
                    title="<?=$newsnb[$i]['name'.$lang]?>">
                    <div class="blog__img scale-img effect10">
                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '265x245x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name'.$lang]]) ?>
                    </div>
                </a>
                <div class="blog__content">
                    <span class="blog__name">
                        <?=$newsnb[$i]['name'.$lang]?>
                    </span>
                    <div class="blog__date">
                        <img src="assets/images/images/icon-date.png" alt="">
                        <span><?=date("d",$v['date_created'])?> Tháng
                            <?=date("m, Y",$v['date_created'])?></span>
                    </div>
                    <span class="blog__desc">
                        <?=$newsnb[$i]['desc'.$lang]?>
                    </span>
                    <div class="blog__xemthem">
                        <a href="<?=$newsnb[$i][$sluglang]?>" class="text-decoration-none">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php }?>

            <?php } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php if(count($newsnb)>6){?>
        <div class="hinhanh__xemthem">
            <a href="tin-tuc" title="Tin tức"
                class=" button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                    Thêm</span>
            </a>
        </div>
        <?php } ?>
    </div>
</div>

<div class="videobl pd">
    <div class="wrapper">
        <div class="videobgll">
            <div class="videoo">
                <div class="video__heading">
                    <span class="heading__title">
                        video
                    </span>
                </div>
                <div class="video__list">
                    <?php if(!empty($video)) {
	$video = $d->rawQuery("select link_video, id, name$lang from #_photo where type = ? and act <> ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb, id desc",array('video','photo_static')); if(count($video)) { ?>
                    <div id="fotorama-videos" data-width="100%" data-thumbmargin="10" data-height="330" data-fit="cover"
                        data-thumbwidth="140" data-thumbheight="80" data-allowfullscreen="true" data-nav="thumbs">
                        <?php foreach($video as $k => $v) { ?>
                        <a href="https://youtube.com/watch?v=<?=$func->getYoutube($v['link_video'])?>"
                            title="<?=$v['name'.$lang]?>"></a>
                        <?php } ?>
                    </div>
                    <?php } } ?>
                </div>
            </div>
            <div class="binhluan">
                <div class="video__heading">
                    <span class="heading__title">
                        bình luận
                    </span>
                </div>
                <div class="binhluan__list">
                    <?php if(!empty($feedback)){?>
                    <div class="slick__blog">
                        <?php foreach($feedback as $v) {?>
                        <div>
                            <div class="blog__item">

                            </div>
                        </div>
                        <?php }?>

                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="datlich">
    <div class="wrapper">
        <div class="datlichh">
            <div class="datlich__left">
                <span class="datlich__heading">
                    đặt lịch ngay
                </span>
                <?php if(!empty($slogandangky)){?>
                <span class="datlich__title">
                    <?=$slogandangky['name'.$lang]?>
                </span>
                <?php }?>
            </div>
            <div class="datlich__right">
                <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="datlich__form">
                        <div class="datlich__form--left">
                            <div class="newsletter-input">
                                <input type="text" class="form-controld" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="Họ và tên" required />
                                <div class="invalid-tooltip">Vui lòng nhập họ và tên</div>
                            </div>
                            <div class="newsletter-input">
                                <input type="number" class="form-controld"
                                    value="<?=(!empty($flash->has('phone'))) ? $flash->get('phone') : ''?>"
                                    id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại"
                                    required />
                                <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                            </div>
                        </div>
                        <div class="datlich__form--right">
                            <div class="newsletter-input">
                                <textarea type="text" class="form-controldd" id="content-newsletter"
                                    name="dataNewsletter[content]" placeholder="Nội dung" required></textarea>
                                <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                            </div>
                            <div class="newsletter-button">
                                <input type="submit" class="btnd" name="submit-newsletter" value="ĐẶT LỊCH" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="feedback pd">
    <div class="wrapper">
        <div class="heading">
            <span class="heading__name"><?=$setting['name'.$lang]?></span>
            <div class="heading__middle">
                <span class="heading__before">
                    ý kiến
                </span>
                <span class="heading__after">
                    &nbsp;khách hàng
                </span>
            </div>
        </div>
        <div class="feedback__list">
            <?php if(!empty($feedback)) {?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:25" data-md-items="2:25"
                data-lg-items="3:35" data-xlg-items="3:35" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".feedback-partner">
                <?php foreach($feedback as $v){?>
                <div class="feedback__item">
                    <div class="feedback__img scale-img effect10">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '125x125x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </div>
                    <div class="feedback__frame">
                        <div class="feedback__card">
                            <div class="feedback__card--name">
                                <span class="feedback__name cut_string1">
                                    - <?=$v['name'.$lang]?>
                                </span>
                                <span class="feedback__desc cut_string1">
                                    <?=$v['desc'.$lang]?>
                                </span>
                            </div>
                            <div class="feedback__content">
                                <div class="feedback--icon">
                                    <img src="assets/images/images/icon-feedback.png" alt="">
                                </div>
                                <span>
                                    <?=$v['content'.$lang]?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </div>
</div>
</div>
</div>
</div>