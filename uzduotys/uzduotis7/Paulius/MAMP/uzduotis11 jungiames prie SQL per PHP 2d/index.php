<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <h1>JUNGIAMES PRIE SQL su PHP</h1>






</body>

<?php
    

    echo "
    <h3>JUNGIAMES PRIE SQL su PHP</h3>";
    
    define("SERVERNAME", "localhost");
    define("USERNAME", "root"); /// tikras arba rooot
    define("PASSWORD", "root"); /// tikras arba root
    define("DB_NAME", "testuoju");

    /////jungtis prie DB. naudojamas 
    
    
        
            $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);
        if ($connection) {
            echo "prisijungti pavyko";
        } else {
            echo "prisijungti nepavyko <br>" . mysqli_connect_error() . "<br>";
        }
    /////idedame dar viena reiksme.
    
    function createUser($conn, $name, $pass, $email, $rights){
        
    
    $sql = "INSERT INTO users VALUES ('', '$name', '$pass','$email', '$rights') ";
    $status = mysqli_query($conn, $sql); 
    if ($status == false) {
        echo "<br> nepavyko sukurti vartotojo <br>";
    } else echo "<br> viskas OK <br>";
    }
    
//createUser($connection, "Paulina", "kakis", "email@email", "moderator");

     function deleteUser($conn, $nameDel){

    $sql = "DELETE FROM users WHERE username='$nameDel'";
    $status = mysqli_query($conn, $sql); 
    if ($status == false) {
        echo "<br> nepavyko sukurti vartotojo <br>";
    } else echo "<br> viskas OK <br>";
    }

//deleteUser($connection, "Paulina");

    
    function getUsers($conn, $kiek = 99999) {
        $sql = "SELECT * FROM users";
        $results = mysqli_query($conn, $sql);
            if(mysqli_num_rows($allUsers) > 0 ) {
        print_r($results);
    } else {
        echo "Rasta 0 rezultatu <br>";
        return $results;
    }
    
    }
    
    ///mysqli_fetch_row - paima sekanti masyva/nari is paduoto masyvo
    $allUsers = getUsers($connection);
    $userData = mysqli_fetch_row($allUsers);
    print_r($eil);
?>


    <?php
    while ($userData){
            ?>
            <div>
                <h2>
                    <?php echo $userData['1'];?>
                </h2>
                <ul>
                    <li>EMAIL:
                        <?php echo $userData['3'];?>
                    </li>
                    <li>PASS:
                        <?php echo $userData['2'];?>
                    </li>
                    <li>RIGHTS:
                        <?php echo $userData['4'];?>
                    </li>
                </ul>
            </div>

            <?php
               $userData = mysqli_fetch_row($allUsers);
    } ?>





</html>
