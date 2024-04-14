<?php

require 'PHPMailer/PHPMailerAutoload.php';

$your_name = $_POST['your_name'];
$your_email = $_POST['your_email'];
$your_message = $_POST['your_message'];

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

$mail->From = $your_email;
$mail->FromName = $your_name;
$mail->addAddress('noreply.nouthemes@gmail.com', 'NouThemes');
// Add a recipient
//$mail->addAddress('ellen@example.com');
// Name is optional
$mail->addReplyTo($your_email, $your_name);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
// $mail->addAttachment('/var/tmp/file.tar.gz');
// Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
// Optional name
$mail->isHTML(true);
// Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $your_message;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
	echo 'Message has been sent';
}