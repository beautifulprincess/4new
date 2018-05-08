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
$mail->setFrom("admin@4new.com", $_REQUEST['name']);
//Set an alternative reply-to address
$mail->addReplyTo($_REQUEST['name'], $_REQUEST['name']);
$emails = preg_split("/,/", $_REQUEST['emails']);
foreach($emails as $email) {
    $email = trim($email);
//Set who the message is to be sent to
$mail->addAddress($email, 'Hi');
//Set the subject line
$mail->Subject = 'From 4NEW Customer: ' . $_REQUEST['name'];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('email_contents.html'), __DIR__);
//Replace the plain text body with one created manually
//$mail->AltBody = $_REQUEST['message'];
$mail->msgHTML(preg_replace("/\{\{message\}\}/", $_REQUEST['message'], file_get_contents('lib/email_contents.html')));
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    // echo json_encode(array('res' => '300', 'msg' => "Mailer Error: " . $mail->ErrorInfo));
} else {
    // echo json_encode(array('res' => '200', 'msg' => "Message sent!"));
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
}
echo json_encode(array('res' => '200', 'msg' => "Message sent!"));
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
//*/

/*
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.mail.yahoo.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'juliafodor@yahoo.com';
//Password to use for SMTP authentication
$mail->Password = 'PASSWORD';
//Set who the message is to be sent from
$mail->setFrom($_REQUEST['useremail'], $_REQUEST['username']);
//Set an alternative reply-to address
$mail->addReplyTo($_REQUEST['useremail'], $_REQUEST['username']);
//Set who the message is to be sent to
$mail->addAddress('juliafodor@yahoo.com', 'Julia Fodor');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('email_contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = $_REQUEST['message'];
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
//die(print_r($mail, true));
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
//*/

/*
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom($_REQUEST['useremail'], $_REQUEST['username']);
//Set an alternative reply-to address
$mail->addReplyTo($_REQUEST['useremail'], $_REQUEST['username']);
//Set who the message is to be sent to
$mail->addAddress('juliafodor@yahoo.com', 'Julia Fodor');
//Set the subject line
$mail->Subject = 'VN3T support';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('email_contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = $_REQUEST['message'];
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
//*/
?>
