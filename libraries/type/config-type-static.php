<?php
  /* Giới thiệu */
  $nametype = "gioi-thieu";
  $config['static'][$nametype]['title_main'] = "Giới thiệu";
  $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
  $config['static'][$nametype]['images'] = true;
  $config['static'][$nametype]['name'] = true;
  $config['static'][$nametype]['desc'] = true;
  $config['static'][$nametype]['desc_cke'] = false;
  $config['static'][$nametype]['content'] = true;
  $config['static'][$nametype]['content_cke'] = true;
  $config['static'][$nametype]['seo'] = true;
  $config['static'][$nametype]['width'] = 650;
  $config['static'][$nametype]['height'] = 440;
  $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

  /* Slogan */
  $nametype = "slogan-dich-vu";
  $config['static'][$nametype]['title_main'] = "Slogan dịch vụ";
  $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
  $config['static'][$nametype]['name'] = true;
  
  /* Liên hệ */
  $nametype = "lienhe";
  $config['static'][$nametype]['title_main'] = "Liên hệ";
  $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
  $config['static'][$nametype]['content'] = true;
  $config['static'][$nametype]['content_cke'] = true;
  
    /* Footer */
  $nametype = "footer";
  $config['static'][$nametype]['title_main'] = "Footer";
  $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
  $config['static'][$nametype]['name'] = true;
  $config['static'][$nametype]['content'] = true;
  $config['static'][$nametype]['content_cke'] = true;

?>