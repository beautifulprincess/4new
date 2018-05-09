<?php
if (!isset($referralCode)) $referralCode = "ABCDE";

if (!isset($referralEmail) || !$referralEmail) {
  header("Content-Type: image/png");
}
$stamp = @imagecreatetruecolor(350, 320) or die("Cannot Initialize new GD image stream");

$white = imagecolorallocate($stamp, 255, 255, 255);
$blue = imagecolorallocate($stamp, 0, 73, 145);
$lightblue = imagecolorallocate($stamp, 54, 184, 255);
imagefilledrectangle($stamp, 0, 0, 350, 320, $blue);

$im1 = imagecreatefrompng('assets/images/mark2.png');
$background = imagecolorallocatealpha($im1, 255, 255, 255, 127);
imagecolortransparent($im1, $background);
imagealphablending($im1, false);
imagesavealpha($im1, true);

imagealphablending($stamp, TRUE);
imagesavealpha($stamp, TRUE);
// imagecopymerge($stamp, $im1, 0, 0, 0, 0, imagesx($im1), imagesy($im1), 10);
imagecopyresized($stamp, $im1, 0, 0, 0, 0, 350, 320, 350, 320);

$im2 = imagecreatefrompng('assets/images/logo-white2.png');
$background = imagecolorallocatealpha($im2, 255, 255, 255, 127);
imagecolortransparent($im2, $background);
imagealphablending($im2, false);
imagesavealpha($im2, true);

imagealphablending($stamp, TRUE);
imagesavealpha($stamp, TRUE);
// imagecopymerge($stamp, $im2, 120, 270, 0, 0, imagesx($im2), imagesy($im2), 100);
imagecopyresized($stamp, $im2, 120, 280, 0, 0, 30, 30, 30, 30);

imagefilledrectangle($stamp, 75, 75, 275, 175, $white);

imagesavealpha($dimg, true);
$font = "./assets/webfonts/Montserrat-Regular.ttf";
$font2 = "./assets/webfonts/Montserrat-Bold.ttf";
$font3 = "./assets/webfonts/Montserrat-Italic.ttf";

imagefttext($stamp, 9, 0, 40, 30, $white, $font, "4new affiliate is bonus social rewards platform");
imagefttext($stamp, 9, 0, 105, 50, $white, $font, "for buying KWATT token");
imagefttext($stamp, 9, 0, 45, 210, $white, $font, "Join the 4NEW token sale with this code and");
imagefttext($stamp, 9, 0, 55, 230, $white, $font, "receive up to 50% additional 4NEW coins.");
imagefttext($stamp, 9, 0, 90, 260, $lightblue, $font2, "Visit 4new.io and click Join!");
imagefttext($stamp, 26, 0, 115, 125, $blue, $font2, $referralCode);
imagefttext($stamp, 9, 0, 125, 155, $blue, $font, "My Referral Code");
imagefttext($stamp, 16, 0, 160, 302, $white, $font3, "4NEW");
$text_color = imagecolorallocate($stamp, 233, 14, 91);

if (isset($referralEmail) && $referralEmail) {
  imagepng($stamp, "referrals/" . md5($referralEmail) . ".png");
} else {
  imagepng($stamp);
}

imagedestroy($im1);
imagedestroy($stamp);