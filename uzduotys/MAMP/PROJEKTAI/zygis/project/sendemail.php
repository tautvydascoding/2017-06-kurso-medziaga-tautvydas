<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>php emails</title>
        
        
        
<!--        TEST FONTS-->
        
        <link href="https://fonts.googleapis.com/css?family=Andada|Raleway:400" rel="stylesheet">
        
        
        
        
        
        
        
<!--        <link href="https://fonts.googleapis.com/css?family=Andada|Judson:700" rel="stylesheet" />-->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>


    <body class="email-bg">

        <?php

//            echo "<h2>Laiskas siunciamas</h2>";


//            print_r($_GET). "<br/>";

             $clientName = $_GET['name'];
             $clientEmail = $_GET['email'];
             $clientMessage = $_GET['message'];

            


            require_once './lib/PHPMailer-master/PHPMailerAutoload.php';


            $mail = new PHPMailer;

            $mail->SMTPDebug = 0;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'zygtest1@gmail.com';                 //kas siuncia
            $mail->Password = 'barakudosne';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('zygtest1@gmail.com', $clientName);
            $mail->addAddress('zygtest1@gmail.com', 'Test email');     // kam siuncia
        
            header( "refresh:2;url=contacts.php" ); //po 2 sekunciu redirektina atgal i kontaktu puslapi
        
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo($clientEmail, 'Nauja žinutė nuo '. $clientName);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = "Nauja zinute nuo " . $clientName;
            $mail->Body    = nl2br($clientMessage);
            $mail->AltBody = nl2br($clientMessage);

            if(!$mail->send()) {
                echo '<div class="msg-parent"><h2 class="small-heading email-msg">Nepavyko išsiųsti žinutės, bandykite dar kartą</h2></div>';
//                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo '<div class="msg-parent"><h2 class="small-heading email-msg">Dėkojame, jūsų žinutė išsiųsta!</h2></div>';
            }
            
            

        ?>
 
    </body>

</html>