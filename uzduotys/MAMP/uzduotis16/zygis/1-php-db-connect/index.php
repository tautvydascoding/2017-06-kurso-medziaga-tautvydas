<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8"/>
        <title>php database connext</title>
    </head>
    <body>

        <?php

            echo "<h1>Prie db su php</h1>";

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";


            //susikuriam konstantas tiem kintamiesiem kurie yra svarbus ir ju niekad nekeisim
            define("SERVERNAME", 'localhost');
            define("USERNAME", 'zygis');
            define("PASSWORD", 'ponaipizonai');
            define("DB_NAME", 'testuoju');

            //mysqli_conncet - suprogramuota funkciuja kuri prisijungia prie duombazes
            $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);


            if($connection){
                echo "<h2>prisijungem prie db</h2";
            }else{
                echo "<h2>nepavyko prisijungti:</h2> " . mysqli_connect_error();
            }

              echo "<br/>";
              echo "<br/>";
              echo "<br/>";


        ?>

    </body>
</html>
