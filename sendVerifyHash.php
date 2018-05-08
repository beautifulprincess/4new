<?php
include('php-mailer/PHPMailer.php');
include('php-mailer/Exception.php');
include('php-mailer/SMTP.php');
include('php-mailer/OAuth.php');
include('php-mailer/POP3.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\POP3;

//* gmail
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "normalpeople567@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "mkdqonhzbmbqooyo";
//Set who the message is to be sent from
$mail->setFrom("admin@4new.com", "4NEW");
//Set an alternative reply-to address
$mail->addReplyTo("4NEW", "4NEW");
//Set who the message is to be sent to
$mail->addAddress($verifyEmail, 'Welcome to 4NEW');
//Set the subject line
$mail->Subject = 'Welcome to 4NEW! Verify Email';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('email_contents.html'), __DIR__);
//Replace the plain text body with one created manually
//$mail->AltBody = $_REQUEST['message'];
$mail->msgHTML(preg_replace("/\{\{message\}\}/", "<a href=\"{$baseurl}verify/{$verifyHash}\">Click Here!</a> or visit this link {$baseurl}verify/{$verifyHash}", file_get_contents('lib/email_contents.html')));
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    // echo json_encode(array('res' => '300', 'msg' => "Mailer Error: " . $mail->ErrorInfo));
} else {
    // echo json_encode(array('res' => '200', 'msg' => "Message sent!"));
}
?>
