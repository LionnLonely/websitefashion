<?php

require 'PHPMailer/PHPMailerAutoload.php';

$your_email = $_POST['your_email'];

$mail = new PHPMailer;
//$mail->SMTPDebug = 3;
// Enable verbose debug output

$mail->isSMTP();
// Set mailer to use SMTP
$mail->Host ='smtp.gmail.com';
// Specify main and backup SMTP servers
$mail->SMTPAuth = true;
// Enable SMTP authentication
$mail->Username ='noreply.nouthemes@gmail.com';
// SMTP username
$mail->Password ='!@#$%^&*(';
// SMTP password
$mail->SMTPSecure ='tls';
// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
// TCP port to connect to

$mail->From = 'noreply.nouthemes@gmail.com';
$mail->FromName = 'NouThemes';
$mail->addAddress($your_email);
// Add a recipient
//$mail->addAddress('ellen@example.com');
// Name is optional
$mail->addReplyTo('noreply.nouthemes@gmail.com', 'NouThemes');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
// $mail->addAttachment('/var/tmp/file.tar.gz');
// Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
// Optional name
$mail->isHTML(true);
// Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<h3>Thank you for subscribing!</h3>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
	echo 'Message has been sent';
}