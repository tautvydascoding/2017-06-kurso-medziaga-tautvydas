<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


      require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      $mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'pastastestas@gmail.com';                 // SMTP username
      $mail->Password = 'pastastestas123';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom('pastastestas@gmail.com', 'testuotojas');
      $mail->addAddress('pastastestas@gmail.com', 'Simona');     // Add a recipient
      // $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('pastastestas@gmail.com',  'taip');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = "Klausimas nuo: $klientoVardas";
      $mail->Body    = '<h1>Apziurejau jusu parduotuve ir kilo klausimas</h1></b>';
      $mail->AltBody = 'Apziurejau jusu parduotuve ir kilo klausimas: Kiek kainuoja ...';
      $mail->Body    = $klientoKlausimas;
      $mail->AltBody = $klientoKlausimas;

      if(!$mail->send()) {
          echo 'Žinutė negali būti išsiųsta. Bandykite dar kartą.';
          echo 'Error ' . $mail->ErrorInfo;
      } else {
          echo 'Jūsų žinutė buvo sėkmingai išsiųsta!';
      }





    ?>

  </body>
</html>
