<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>labas</title>
  </head>
  <body>
<?php

echo "<h2>laiskas siunciamas</h2>";
print_r($_GET);
$klientoVardas = $_GET['firstname'];
$KlientoKlausimas = $_GET['question'];
$klientoElPastas = $_GET['email'];

require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testascoding@gmail.com';                 // SMTP username
$mail->Password = 'tratata123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('testascoding@gmail.com', 'Mailer');
$mail->addAddress('testascoding@gmail.com', 'Tautvydas');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('testascoding@gmail.com', 'vartotojo klausimas');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'klausimas nuo Nerijus';
$mail->Body    = '<h1>Apziurejau jusu parduotuve ir kilo klausimas</h1> <b>1)</b>';
$mail->AltBody = 'Apziurejau jusu parduotuve ir kilo klausimas \n : kiek kainuoja...';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

 ?>


wwwwww
  </body>
</html>
