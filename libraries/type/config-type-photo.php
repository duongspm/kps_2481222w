<?php
    /* Banner Header ??*/
    $nametype = "banner-header";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner header";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 710;
    $config['photo']['photo_static'][$nametype]['height'] = 90;
    $config['photo']['photo_static'][$nametype]['thumb'] = '710x90x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] =  100;
    $config['photo']['photo_static'][$nametype]['height'] = 115;
    $config['photo']['photo_static'][$nametype]['thumb'] = '100x115x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 70;
    $config['photo']['photo_static'][$nametype]['height'] = 80;
    $config['photo']['photo_static'][$nametype]['thumb'] = '70x80x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark sản phẩm*/
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 70;
    $config['photo']['photo_static'][$nametype]['height'] = 80;
    $config['photo']['photo_static'][$nametype]['thumb'] = '70x80x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 655;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x485x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social */
    //Có nhiều cái thì thêm vào
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '40x40x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /**/
    //Có nhiều cái thì thêm vào
    $nametype = "chung-nhan";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Chứng nhận";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 6;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 180;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 92;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '180x92x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';


        /* Video */
    $nametype = "video";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
?>