<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>php emails</title>
    </head>


    <body>

        <?php

            echo "<h2>Laiskas siunciamas</h2>";


            print_r($_GET). "<br/>";

             $clientoName = $_GET['firstname'];
             $clientoQuestion = $_GET['question'];
             $clientoEmail = $_GET['email'];

            


            require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';


            $mail = new PHPMailer;

            $mail->SMTPDebug = 0;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'zygtest1@gmail.com';                 // SMTP username
            $mail->Password = 'barakudosne';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('zygtest1@gmail.com', 'Mailer');
            $mail->addAddress('zygtest1@gmail.com', 'Mister User Zygis');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo($clientoEmail, 'Klausimas nuo '. $clientoName);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = "Klausimelis nuo: $clientoName";
            $mail->Body    = $clientoQuestion;
            $mail->AltBody = $clientoQuestion;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }



           



        ?>
 


    </body>

</html>