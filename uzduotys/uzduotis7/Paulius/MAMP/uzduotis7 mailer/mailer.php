
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <h1>Testinam framework</h1>

   <?php
    echo "<h2>Laiskas siunciamas<\h2>";
    
    print_r($_GET);
    $pavadinimas = $_GET['field-1'];   
    $data = $_GET['field-1-2'];
    $parasas = $_GET['field-1-3'];
    
    
    
    require_once 'lib/lib/PHPMailerAutoload.php';
    
    
    $mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output. Geriausia išsijungti

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'samoningai@gmail.com';                 // SMTP username
$mail->Password = 'jogavasista123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('samoningai@gmail.com', 'samoningai');
$mail->addAddress('samoningai@gmail.com', 'samoningai');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo($klientoElpastas, $klientoVardas); ///cia i kuri maila nueis pastas jei gavejas nuspres atrasyti
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $pavadinimas;
//$mail->Body    = 'Veikia html!!<b>in bold!</b>'; senasis
$mail->Body    = $data; 
//$mail->AltBody = 'Nu cia jei jau nieks neveiks.../n : kiek kainuoja ... ???'; //senasis
$mail->AltBody = 'Nu cia jei jau nieks neveiks.../n : kiek kainuoja ... ???';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
    
    
    
    ?>


</body>
    
    
    
</html>








    
