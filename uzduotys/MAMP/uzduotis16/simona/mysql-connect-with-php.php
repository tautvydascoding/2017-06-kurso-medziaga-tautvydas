<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Jungsime prie DB naudojant PHP </title>
  </head>
  <body>

<?php
echo "PHP";
//
define("SERVERNAME", "127.0.0.1");
define("USERNAME", "root"); // root
define("PASSWORD", "root");  // root
define("DB_NAME", "testuoju");

// mysqli connect - jungiasi prie DB
$connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
if ($connection) {
   echo "prisijungti prie DB pavyko  <br>";
} else {
   echo "Prisijungti prie DB NEPAVYKO!!!" .  mysqli_connect_error() . "<br>";
}

function createUser ($connect, $name="name", $pass='pass', $email='email', $rights='user'){
$sql="INSERT INTO users VALUES ('', 'Tomulis', 'Drako', 'a@a.lt', 'moderator')"};
$status=mysqli_query($connect, $sql);
if ($status == false) { // !$status
    echo "nepavyko sukurti vartotojo";
}else{
  echo "sveikinimai";
  }
// createUser($connect, 'Paulina', 'akis', "paulina@pl.lt", "common");
// createUser($connect, 'Paulina', 'xxfa', "aa@pl.lt", "common");
// createUser($connect, 'Paulina', '61erilis', "taukas@pl.lt", "admin");

function deleteUser ($connect, $id){
  $sql= "DELETE FROM users
         WHERE id = $id";
  $status = mysqli_query($connect, $sql);
if($status) {
  echo "Vartotojas nr: $id istrintas sekmingai";
} else {
  echo "Istrinti vartotojo nr: $id nepavyko";
  }
}
// deleteUser ($connection, 8);

function getUsers ($connect, $kiek = 99999) {
  $sql = "SELECT * FROM users";
  $results = mysqli_query ($connect, $sql);
  if (mysqli_num_rows($allUsers) > 0) {                   //
    print_r($results);
  } else {
    echo "Nerasta vartotoju </br>";
  }
  return $results;
}
$allUsers = getUsers($connection);

// paima sekanti masyva/nari is paduoto masyvo
$userData = mysqli_fetch_row($allUsers) //visus duomenis is duomenu bazes paimame ir suskaldome eilutemis  (tarsi for_each versija - pereina visą masyvą)
// print_r($userData);

<?php
while ($userData) {
    ?>
      <div class="">
        <h2><?php echo ['1']; ?></h2>
          <ul>
            <li> <?php Email: echo ['3']; ?> </li>
            <li> <?php Password: echo ['2']; ?> </li>
            <li> <?php ACC Status: echo ['4']; ?> </li>
          </ul>
      </div>
    <?php
    $userData = mysqli_fetch_row($allUsers); // paima sekanti masyva/nari is paduoto masyvo
}
?>

function getUser ($id); {
  $sql= "SELECT * FROM user
  WHERE id = $id";
  $results = mysqli_query ($connect, $sql);
  $user = mysqli_fetch_assoc($result);                   //
  if ($user) {
  } else {
    echo "nr: $id Tokio vartotojo nera </br>";
  }
  return $user;
}
$user - getUser($connection, 2);
echo "Vartotojo vardas:" . $user[1] . "<br />";
?>

  </body>
</html>
