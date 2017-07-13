  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php
      echo "<h1>Jungsimes prie DB naudojant PHP </h1>";

      // kuriam konstantas saugoti prisijungimo prie DB duomenims
      define("SERVERNAME", "localhost");
      define("USERNAME", "tautvydas06"); // root
      define("PASSWORD", "tratata");  // root
      define("DB_NAME", "testuoju");

      // mysqli_connect  - jungiasi prie DB
       $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
       if ($connection) {  // $connection == true
          echo "prisijungti prie DB pavyko  <br>";
       } else {
          echo "Prisijungti prie DB NEPAVYKO!!!" .  mysqli_connect_error() . "<br>";
       }

       // uzduotis : vartotojo sukurimo veiksmus ideti i f-ja ($connect)
       // uzduotis 2 : vartotojo sukurimo veiksmus ideti i f-ja ($connect, $name, $pass, $email, $rights)
       function createUser($connection) {
           // id | username | pass | email  | rights
         //  mysqli_query("INSERT INTO users VALUES ('', 'Tomulis', 'drako', 'a@a.lt', 'moderator') ");
          $sql = "INSERT INTO users VALUES ('', 'Tomulis', 'drako', 'a@a.lt', 'moderator') ";

          // mysqli_query - ivykdo jusu SQL uzklausa/veiksmus
          $status = mysqli_query($connection, $sql);
          if ( $status == false) { // !$status
             echo "Neapvyko sukurti vatrtotojo!!!  " . mysqli_error($connect) . " <br>";
          } else {
               echo "Sveikiname, Jusu vartototjas sukurtas <br>";
          }
       }
       //createUser($connection);
       function createUser2($connect,  $name="name", $pass='pass', $email='email', $rights='user') {
           // id | username | pass | email  | rights
           // !!! reikalingos SQL'ui kabutes - pvz'$name'
          $sql = "INSERT INTO users VALUES ('', '$name', '$pass', '$email', '$rights'); ";

          // mysqli_query - ivykdo jusu SQL uzklausa/veiksmus
          $status = mysqli_query($connect, $sql);
          if ( $status == false) { // !$status
             echo "Nepavyko sukurti vatrtotojo!!!  " . mysqli_error($connect) . " <br>";
          } else {
               echo "Sveikiname, Jusu vartototjas sukurtas <br>";
          }
       }

      //  createUser2($connection, "Paulina", "kakis", "paul@pl.lt", "common");
      //  createUser2($connection, 'Karolis', 'xxfa', "aa@pl.lt", "common");
      //  createUser2($connection, '61erielis', '12345', "taukinis@aja.lt", "admin");

      // uzsuotis:
      // sukurti f-ja deleteUser($connect, $id)
      //~ sukurti f-ja getUsers($connect) , kuri grazina surikiuota sarasa vartotoju
      // sukurti f-ja getUser($connect, $id)
      // sukurti f-ja editUser($connect, $id)

      function deleteUser($connet, $id) {
          $sql = "DELETE FROM users
                  WHERE id = $id   ";
          $status = mysqli_query($connet, $sql);
          if($status) {
            echo "Vartotojas nr: $id istrintas sekmingai ";
          } else {
            echo "Istrinti vartotjo nr: $id nepavyko!!! " . mysqli_error($connect) . " <br>";
          }
      }
      // deleteUser($connection, 4);

      function getUsers($connet, $kiek =99999) {
          $sql = "SELECT * FROM users";
          $results = mysqli_query($connet, $sql);

          // mysqli_num_rows - suskaldysime result'atus eilutemis ir  tikriname ar radome kazka pagal uzklausa
            mysqli_num_rows($results);
          // if( mysqli_num_rows($results) > 0 ) {
          //     print_r($results);
          // } else {
          //     echo "Nerasta vartotoju  <br />";
          // }
          return $results;
      }
      // issisaugome ka radome DB
      $allUsers = getUsers($connection);

      // mysqli_fetch_row - paima sekanti masyva/nari is paduoto masyvo
      $userData = mysqli_fetch_row($allUsers); //  1 | Paulius   | Petruskevicius | p.p@petruskevicius.lt | admin
      $userData = mysqli_fetch_row($allUsers); //  2 | Rima      | Jankauskiene   | rimute@google.lt      | user
      $userData = mysqli_fetch_row($allUsers); //  3 | Tomulis   | drako          | a@a.lt          | moderator
      // print_r($userData);
     ?>

     <?php
      while ($userData) {
         ?>
         <div class="">
            <h2><?php echo $userData[1]; ?> </h2>
            <ul>
              <li> Email: <?php echo $userData[3]; ?>  </li>
              <li> Password: <?php echo $userData[2]; ?>  </li>
              <li> ACC Status: <?php echo $userData[4]; ?>  </li>
            </ul>
         </div>
        <?php
        $userData = mysqli_fetch_row($allUsers); // mysqli_fetch_row - paima sekanti masyva/nari is paduoto masyvo
    }

    // sukurti f-ja getUser($connect, $id)
    function getUser($connect, $id) {
        $sql = "SELECT * FROM users
                WHERE  id = $id";
        $results = mysqli_query($connect, $sql);

        $data = mysqli_fetch_assoc($results);
        if( $data ) {
            // viskas gerai
        } else {
            echo " NR: $id Tokio  vartotojo neradome!!! <br>";
        }
        return $data;
    }

    $user =  getUser($connection, 5);
    print_r( $user);
    echo "Vartotojo id: " . $user['id'] . " <br />";
    echo "Vartotojo vardas: " . $user["username"] . " <br />";
    echo "Vartotojo slaptazodis: " . $user["pass"] . " <br />";
    echo "Vartotojo email: " . $user["email"] . " <br />";

    ?>

  </body>
</html>
