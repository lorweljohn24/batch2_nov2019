<?php
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 7);
$_SESSION["captcha_num"] = $captcha_num;
$font_size = 30;
$img_width = 70;
$img_height = 40;
$target_layer = imagecreatetruecolor(70,30);
$captcha_background = imagecolorallocate($target_layer, 135, 206, 235);
imagefill($target_layer,0,0,$captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 5, 5, 5, $captcha_num, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>