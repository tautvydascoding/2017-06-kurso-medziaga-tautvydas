<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Emailas</title>
  </head>
  <body>

    <?php

 "<h2>Laiskas issiustas</h2>";
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$message = " Vardas: " . $name . "\r\n Miestas: " . $city . "\r\n Telefonas: " . $phone . "\r\n E-pastas: " . $email;
require_once 'lib2/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'deronbderon@gmail.com';                 // SMTP username
$mail->Password = 'kaunas11';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('deronbderon@gmail.com', 'Klientas');
$mail->addAddress('kindrius@gmail.com', 'Man');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('deronbderon@gmail.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Naujas Pasiulymas';
$mail->Body    =  $message ;
$mail->AltBody = 'kiek kiek kiek kiek kiek \n : Kokia kaina';
$mail->AltBody = 'kiek kiek kiek kiek kiek \n : Kokia kaina';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Message was sent!';

  };
 ?>
 <script type="text/javascript">
window.location.href = 'index.php';
 </script>  <?php

?>

  </body>
</html>
