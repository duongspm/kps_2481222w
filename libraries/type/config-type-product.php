<?php

    /* Thư viện ảnh */
    $nametype = "thu-vien-anh";
    $config['product'][$nametype]['title_main'] = "Thư viện ảnh";
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = true;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array(
        $nametype => array(
            "title_main_photo" => "Hình ảnh thư viện ảnh",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 2,
            "images_photo" => true,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 420,
            "height_photo" => 320,
            "thumb_photo" => '420x320x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        )
    );
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 420;
    $config['product'][$nametype]['height'] = 320;
    $config['product'][$nametype]['thumb'] = '420x320x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

?>