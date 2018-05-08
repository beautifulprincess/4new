<?php
if (!isset($referralCode)) $referralCode = "ABCDE";

if (!isset($referralEmail) || !$referralEmail) {
  header("Content-Type: image/png");
}
$stamp = @imagecreatetruecolor(350, 320) or die("Cannot Initialize new GD image stream");
$bg_color = imagecolorallocate($stamp, 2, 27, 79);
imagefilledrectangle($stamp, 0, 0, 350, 320, $bg_color);

$im1 = imagecreatefrompng('assets/images/icons/account12_03.png');
$background = imagecolorallocatealpha($im1, 0, 0, 0, 127);
imagecolortransparent($im1, $background);
imagealphablending($im1, false);
imagesavealpha($im1, true);

imagealphablending($stamp, TRUE);
imagesavealpha($stamp, TRUE);
imagecopymerge($stamp, $im1, -50, -50, 0, 0, imagesx($im1), imagesy($im1), 10);

$lightblue = imagecolorallocate($stamp, 0, 174, 239);
imagefilledrectangle($stamp, 75, 75, 275, 155, $lightblue);

imagesavealpha($dimg, true);
$font = "./assets/webfonts/Montserrat-Regular.ttf";
$font2 = "./assets/webfonts/Montserrat-Bold.ttf";
$font3 = "./assets/webfonts/Montserrat-Italic.ttf";

$white = imagecolorallocate($stamp, 255, 255, 255);
imagefttext($stamp, 9, 0, 50, 30, $white, $font, "TokenPay is the world’s most secure coin.");
imagefttext($stamp, 9, 0, 105, 50, $white, $font, "It’s Bitcoin on Steroids!");
imagefttext($stamp, 9, 0, 35, 190, $white, $font, "Join the TokenPay token sale with this code and");
imagefttext($stamp, 9, 0, 45, 210, $white, $font, "receive up to 50% additional TokenPay coins.");
imagefttext($stamp, 11, 0, 55, 250, $lightblue, $font, "Visit TokenPay.com and click Join!");
imagefttext($stamp, 20, 0, 130, 115, $white, $font2, $referralCode);
imagefttext($stamp, 10, 0, 120, 140, $white, $font, "My Referral Code");
imagefttext($stamp, 16, 0, 140, 290, $white, $font3, "4NEW");
$text_color = imagecolorallocate($stamp, 233, 14, 91);

if (isset($referralEmail) && $referralEmail) {
  imagepng($stamp, "referrals/" . md5($referralEmail) . ".png");
} else {
  imagepng($stamp);
}

imagedestroy($im1);
imagedestroy($stamp);