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
             echo "Neapvyko sukurti vatrtotojo!!!  <br>";
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
             echo "Nepavyko sukurti vatrtotojo!!!  <br>";
          } else {
               echo "Sveikiname, Jusu vartototjas sukurtas <br>";
          }
       }

      //  createUser2($connection, "Paulina", "kakis", "paul@pl.lt", "common");
      //  createUser2($connection, 'Karolis', 'xxfa', "aa@pl.lt", "common");
      //  createUser2($connection, '61erielis', '12345', "taukinis@aja.lt", "admin");

      // uzsuotis:
      // sukurti f-ja deleteUser($connect, $id)
      // sukurti f-ja getUsers($connect)
      // sukurti f-ja getUser($connect, $id)
      // sukurti f-ja editUser($connect, $id)

     ?>

  </body>
</html>
