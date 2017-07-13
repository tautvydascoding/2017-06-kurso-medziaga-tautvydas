<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Databa</h1>
    <?php
    echo "labuka <br />";

    // kuriamos konstantos//
    define("SERVERNAME", "localhost");
    define("USERNAME", "mantasman1");
    define("PASSWORD", "sonyso");
    define("DB_NAME", "testuoju");


    $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
    if ($connection) {
      echo "prisijungt prie DB pavyko <br />";
    } else {
      echo "Prisijungt prie DB nepavyko <br />" . mysqli_connect_error() . "<br />";
    }

    function createUser1($connection)
    {
      $sql = "INSERT INTO users VALUES ('', 'Tomulis', 'drako', 'a@a.lt', 'moderator')";
      //mysqli_query ivykdo jusu sql uzklausa
      $status = mysqli_query($connection, $sql);
      if ($status == false) {
        echo "pridet vartotojo nepavyko";
      } else {
        echo "sveikinu sukurus nauja vartotoja <br />";
      }
    }
    // createUser($connection);
    function createUser2($connection, $name="name", $pass="pass", $email="email", $rights="user")
    {
      $sql = "INSERT INTO users VALUES ('', '$name', '$pass', '$email', '$rights'); ";
      //mysqli_query ivykdo jusu sql uzklausa
      $status = mysqli_query($connection, $sql);
      if ($status == false) {
        echo "pridet vartotojo nepavyko";
      } else {
        echo "sveikinu sukurus nauja vartotoja <br />";
      }
    }

    // createUser2($connection, 'Paulina', 'kakis', 'paule@oul.lt', 'common');
function deleteUser ($connection, $id)
{
  $sql = "DELETE FROM users
          WHERE id = $id";
  $status = mysqli_query($connection, $sql);
  if ($status) {
    echo "Vartotojo nr: $id istrintas sekmingai";
  } else {
    echo "Nerastas vartotojas nr. $id";
  }
}
// deleteUser($connection, 5);

function getUsers($connection, $kiek = 99999) {
  $sql = "SELECT * FROM users";
  $results = mysqli_query($connection, $sql);
  if (mysqli_num_rows($results) > 0) {
    print_r($results);
  } else {
    echo "Rasta 0 vartotoju <br />";
  }
  return $results;
}
$allUsers = getUsers($connection);
$userData = mysqli_fetch_row($allUsers);
print_r($userData);
     ?>

     <?php
     while ($userData) {
       ?>
     <div class="">
       <h2><?php echo $userData['1']; ?></h2>
       <ul>
         <li> Email: <?php echo $userData['3']; ?></li>
         <li> Pass: <?php echo $userData['2']; ?></li>
         <li> Status: <?php echo $userData['4']; ?></li>
       </ul>
     </div>
<?php
$userData = mysqli_fetch_row($allUsers);
}
function getUser($connection, $id)
{
  $sql = "SELECT * FROM users
        WHERE id = $id";
        $results = mysqli_query($connection, $sql);
        $user = mysqli_fetch_assoc($results);
        if ($user) {
        } else {
          echo "nr. $id vartotojo neradom <br />";
        }

        return $results;
}
$user = getUser($connection, 1);
print_r($user);
echo "Vartotojo vardas: " . $user["5"] ;
?>
  </body>
</html>
