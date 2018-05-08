<?php
$referralCode = "ABCDE";

header("Content-Type: image/png");
$stamp = @imagecreatetruecolor(350, 320) or die("Cannot Initialize new GD image stream");
$bg_color = imagecolorallocate($stamp, 2, 27, 79);
imagefilledrectangle($stamp, 0, 0, 350, 320, $bg_color);

// imagecolorallocate($stamp, $background[0], $background[1], $background[2]);

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

// Merge the stamp onto our photo with an opacity of 50%
// imagecopymerge($im1, $stamp, imagesx($im1) - $sx - $marge_right, imagesy($im1) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 100);

imagesavealpha($dimg, true);
$font = "./assets/webfonts/Montserrat-Regular.ttf";

$white = imagecolorallocate($stamp, 255, 255, 255);
imagefttext($stamp, 9, 0, 50, 30, $white, $font, "TokenPay is the world’s most secure coin.");
imagefttext($stamp, 9, 0, 105, 50, $white, $font, "It’s Bitcoin on Steroids!");
imagefttext($stamp, 9, 0, 35, 190, $white, $font, "Join the TokenPay token sale with this code and");
imagefttext($stamp, 9, 0, 45, 210, $white, $font, "receive up to 50% additional TokenPay coins.");
imagefttext($stamp, 11, 0, 55, 250, $lightblue, $font, "Visit TokenPay.com and click Join!");
imagestring($stamp, 155, 100, 90, $referralCode, $text_color1);
imagestring($stamp, 5, 105, 125, "My Referral Code", $text_color1);
$text_color = imagecolorallocate($stamp, 233, 14, 91);
imagepng($stamp);

imagedestroy($im1);
imagedestroy($stamp);