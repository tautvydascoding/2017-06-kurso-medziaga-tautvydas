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
           // $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);


            $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

            if($connection){
                echo "<h2>prisijungem prie db</h2";
            }else{
                echo "<h2>nepavyko prisijungti:</h2> " . mysqli_connect_error();
            }

              echo "<br/>";
              echo "<br/>";
              echo "<br/>";


            // mysqli_query('INSERT INTO users VALUES ("", "Aloyzas", "trys4penki", "al@ponai.lt", "moderator")');


            $sql = 'INSERT INTO users VALUES ("", "Martynas", "keturiketuri4", "marcius@bratka.lt", "guest")';


            //mysqli_query vykdo musu parasyta sql uzklausa
            //$status = mysqli_query($connection, $sql);

            // if(!$status){
            //     echo "<h3>kazkas ne taip</h3>";
            // }

              echo "<br/>";
              echo "<br/>";
              echo "<br/>";




            

            
            // function createConnection($serverName, $userName, $password, $db_name){
            //     define('SERVERNAME', $serverName);
            //     define('USERNAME', $userName);
            //     define('PASSWORD', $password);
            //     define('DB_NAME', $db_name);

            //     $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

            //     return $connection;
            // }






            function createUser($conn, $name="noname", $password="nopas", $email="nomail", $rights="norights"){
                $query = "INSERT INTO users VALUES ('', '$name', '$password', '$email', '$rights')";
                $insert = mysqli_query($conn, $query);
                if ($insert == false){
                    echo "<p> nepavyko, kazkur klaida</p>";
                }else{
                    echo "<p>Naujas vartotojas sukurtas!!!!!</p>";
                }
            }

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            



            // createUser($connection, 'Xose', 'Antoninaburita', 'chose@opa.mx', 'senjor');
            // createUser($connection, 'zorzas', 'heyyyyyy', 'fhance@nonono.fr', 'mehci');
            // createUser($connection, 'pol', 'mate', 'check@neberr.au', 'aiiiight');



            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            


            //funkcija  deleteUser($conn, $id)
            //funkcija  getUser($conn, $id)
            //funkcija  getUsers($conn)
            //funkcija  updateUser($conn, $id)

            //--------------------DELETE USER-------------------------

            function deleteUser($conn, $id){
                $query = "DELETE FROM users WHERE id = '$id'";
                 $status = mysqli_query($conn, $query);
                if ($status == false){
                    echo "<p> nepavyko, kazkur klaida</p>";
                }else{
                    echo "<p>vartotojas nr $id istrintas</p>";
                }
            }

            //deleteUser($connection, 2);


            //--------------------GET USER USER-------------------------

            function getUser($conn, $id){

                $query = "SELECT * FROM users WHERE id = '$id'";
                $status = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($status)){
                print_r($row);
                }
            }

           // getUser($connection, 5);



            //--------------------GET USERS USER-------------------------


            function getUsers($conn){
                $query = "SELECT * FROM users";
                $status = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($status)){
                    print_r($row);
                }
            }

           // getUsers($connection);



            //--------------------UPDATE USER-------------------------

            function updateUser($conn, $colName, $newVal, $id){
                $query = "UPDATE users SET `$colName` = '$newVal' WHERE id = '$id' ";
                $status = mysqli_query($conn, $query);

                  if ($status == false){
                    echo "<p> nepavyko, kazkur klaida</p>";
                }else{
                    echo "<p>vartotojas nr $id pakeistas: naujas $colName yra $newVal</p>";
                }

            }

            updateUser($connection, "username", 'polas', 9);

        ?>

    </body>
</html>
