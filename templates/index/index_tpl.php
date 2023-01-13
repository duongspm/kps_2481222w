<div class="about pd">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <?php if(!empty($about[0])){?>
                <div class="about__left-img animate__ wow animate__zoomIn animated">
                    <a href="<?=$about[0][$sluglang]?>" title="<?=$about[0]['name'.$lang]?>"
                        class="about--img text-decoration-none">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '650x440x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                    </a>
                </div>
                <?php }?>

            </div>
            <div class="about__right animate__ wow animate__zoomIn animated">
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
        <div class="dichvu__list animate__ wow animate__zoomIn animated">
            <?php foreach($dichvu as $v){?>
            <div class="dichvu__item">
                <a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <div class="dichvu__img scale-img effect10">
                        <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => true, 'prefix' => 'product', 'sizes' => '315x317x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
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
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:20" data-sm-items="2:20" data-md-items="3:50"
                data-lg-items="3:80" data-xlg-items="4:100" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-thuonghieu">
                <?php foreach ($tieuchi as $v) { ?>
                <div>
                    <div class="tieuchi__item animate__ wow animate__zoomIn animated">
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
            <div class="album animate__ wow animate__zoomIn animated">
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
                    <div class=" animate__ wow animate__zoomIn animated">
                        <a class=" scale-img" href="<?=ASSET.UPLOAD_PHOTO_L.$v['photo']?>"
                            title="<?=$v['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'isWatermark' => false, 'prefix' => 'product','sizes' => '285x365x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
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
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:5" data-sm-items="2:5" data-md-items="3:6"
                data-lg-items="4:7" data-xlg-items="4:7" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<img src='assets/images/images/prev.png'>|<img src='assets/images/images/next.png'>"
                data-navcontainer=".control-lydo">
                <?php foreach ($lydo as $v) { ?>
                <div class="lydo__item animate__ wow animate__zoomIn animated">
                    <a class="lydo__img text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '33x33x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                    <div class="lydo__content">
                        <a href="<?=$v[$sluglang]?>" class="cut_string1 text-decoration-none lydo__name">
                            <?=$v['name'.$lang]?>
                        </a>
                        <span class="lydo__desc cut_string3">
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
            <div class="blog__item animate__ wow animate__zoomIn animated">
                <a href="<?=$newsnb[$i][$sluglang]?>" class="text-decoration-none"
                    title="<?=$newsnb[$i]['name'.$lang]?>">
                    <div class="blog__img scale-img effect10">
                        <?= $func->getImage(['class' => 'w-100', 'isWatermark' => true, 'prefix' => 'product','sizes' => '265x245x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name'.$lang]]) ?>
                    </div>
                </a>
                <div class="blog__content">
                    <span class="blog__name cut_string2">
                        <?=$newsnb[$i]['name'.$lang]?>
                    </span>
                    <div class="blog__date">
                        <img src="assets/images/images/icon-date.png" alt="">
                        <span><?=date("d",$v['date_created'])?> Tháng
                            <?=date("m, Y",$v['date_created'])?></span>
                    </div>
                    <span class="blog__desc cut_string3">
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

<div class="videobl pd-top">
    <div class="wrapper">
        <div class="videobgll">
            <div class="videoo">
                <div class="video__heading">
                    <span class="heading__title">
                        video
                    </span>
                </div>
                <div class="video__list animate__ wow animate__zoomIn animated">
                    <div class="video-intro">
                        <?= $addons->set('video-fotorama', 'video-fotorama', 4); ?>
                    </div>
                </div>
            </div>
            <div class="binhluan">
                <?php if(!empty($binhluan)){?>
                <div class="video__heading">
                    <span class="heading__title">
                        bình luận
                    </span>
                </div>
                <div class="binhluan__list animate__ wow animate__zoomIn animated">
                    <div class="slick__feedback">
                        <?php foreach($binhluan as $v) {?>
                        <div>
                            <div class="binhluan__item">
                                <div class="binhluan__img">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '80x80x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                                </div>
                                <div class="binhluan__content">
                                    <span class="binhluan--name cut_string1">
                                        <?=$v['name'.$lang]?>
                                    </span>
                                    <span class="binhluan--desc cut_string1">
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                    <span class="binhluan--content cut_string3">
                                        <?=$v['content'.$lang]?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>