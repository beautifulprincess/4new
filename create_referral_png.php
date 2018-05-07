<?php
$referralCode = "ABCDE";
$background = array(2, 27, 79);
$textcolor1 = array(255, 255, 255);
$width = 350;
$height = 320;

header("Content-Type: image/png");
$stamp = @imagecreate(350, 320) or die("Cannot Initialize new GD image stream");
imagecolorallocate($stamp, $background[0], $background[1], $background[2]);

$im1 = imagecreatefrompng('assets/images/icons/account12_03.png');
$im2 = imagecreatefrompng('assets/images/icons/social-rewards_03.png');

imagecopymerge($stamp, $im1, -50, -50, 0, 0, imagesx($im1), imagesy($im1), 10);
imagecopymerge($stamp, $im2, (imagesx($stamp) - imagesx($im2)) / 2, imagesy($stamp) - imagesy($im2) - 30, 0, 0, imagesx($im2), imagesy($im2), 100);

$bg_color = imagecolorallocate($stamp, 0, 174, 239);
imagefilledrectangle($stamp, 75, 75, 275, 155, $bg_color);

// Merge the stamp onto our photo with an opacity of 50%
// imagecopymerge($im1, $stamp, imagesx($im1) - $sx - $marge_right, imagesy($im1) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 100);

$font = "assets/webfonts/GOTHAM-MEDIUM.TTF";

$text_color1 = imagecolorallocate($stamp, $textcolor1[0], $textcolor1[1], $textcolor1[2]);
imagestring($stamp, 55, 15, 45, "TokenPay is the world’s most secure coin.", $text_color1);
// imagettftext($stamp, 20, 1, 122, 21, $text_color1, $font, "TokenPay is the world’s most secure coin.");
imagettfbbox (30, 1, $font, "TokenPay is the world’s most secure coin.");
imagestring($stamp, 55, 15, 65, "It’s Bitcoin on Steroids!", $text_color1);
imagestring($stamp, 5, 15, 170, "Join the TokenPay token sale with this code and", $text_color1);
imagestring($stamp, 5, 15, 190, "receive up to 50% additional TokenPay coins.", $text_color1);
imagestring($stamp, 155, 100, 90, $referralCode, $text_color1);
imagestring($stamp, 5, 105, 125, "My Referral Code", $text_color1);
imagepng($stamp);

imagedestroy($im1);
imagedestroy($stamp);