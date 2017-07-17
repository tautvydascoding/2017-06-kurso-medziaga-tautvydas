<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      echo "<h2>Your message has been submitted, thank you.</h2>";

      print_r($_GET);
      $name = $_GET['name'];
      $email = $_GET['email'];
      $subject = $_GET['subject'];
      $message = $_GET['message'];



      require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';

      $mail = new PHPMailer;


      $mail = new PHPMailer;
      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'ruta.sipkauskaite@gmail.com';                 // SMTP username
      $mail->Password = 'tere1994';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom($email, $name);
      $mail->addAddress('ruta.sipkauskaite@gmail.com', 'Ruta Sipkauskaite');     // Add a recipient
      // $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo($email);
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = $subject;
      $mail->Body    = $message;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }





    ?>

  </body>
</html>
