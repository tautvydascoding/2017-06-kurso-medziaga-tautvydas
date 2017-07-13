<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

echo "<h2> laiskas issiustas </h2>";

print_r($_GET);
$klientoVardas = $_GET['firstname'];
$klientoKlausimas = $_GET['question'];
$klientoElPastas = $_GET['email'];

require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 3;                                 // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'simona.matiukaite@gmail.com';                 // SMTP username
$mail->Password = 'tratata123';                           // SMTP password
$mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('simona.matiukaite@gmail.com', 'Mailer');
$mail->addAddress('simona.matiukaite@gmail.com', 'Simona');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('@klientoElPastas', 'Vartotojo klausimas' . $klientoVardas);
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Klausimas nuo: $klientoVardas";
$mail->Body    = $klientoKlausimas;
// $mail->AltBody = 'Komplimentas svetaines kurejams \n: labai grazu';
$mail->AltBody = $klientoKlausimas;

if(!$mail->send()) {
    echo 'Message could not be sent';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>

  </body>
</html>
