<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php extends</title>
  </head>
  <body>

    <?php

class Gyvunas {
  public $alive = true;
  public $positionX;
  public $positionY;
}
class Tipas {

  public $rusis = "kate";
  public $minta = "mesa";
}
class Liutas {
  public $alive = true;
  public $spalva = "#a34baa";
  private $amzius = 5;
  private $name = "bevardis";
  public function getName() {
    return $this->name;
  }
  public function setName($x) {
    $this->name = $x;
  }
}


$Simba = new Liutas();
$Ardis = new Liutas();
$Mufasa = new Liutas();

$Simba->spalva = "#b2b2b2";
echo "Simbos spalva: " . $Simba->spalva . "<br />";
$Mufasa->spalva = "#f123a1";
echo "Mufasa spalva: " . $Mufasa->spalva . "<br />";
$Ardis->spalva = "#fff";
echo "Ardis spalva: " . $Ardis->spalva . "<br />";
echo "Simbos vardas: " . $Simba->getName() . "<br />";
$Simba->setName("simbackinas");
echo "simbos vardas: " . $Simba->getName() . "<br />";

// IDEA: uzduotis 3

class User {
  public $username = "user";
  public $password = "ccc";
  public $right = "common";
  public function Login($name, $pass) {

    if ($this->username == $name && $this->password == $pass) {
      echo "Jums pavyko prisijungti, $name ";
    } else {
      echo "Tokio vartotojo nera!";
    }
  }
}
class Admin extends User {
  public function changeUserName($nm) {
    $this->username = $nm;
  }
  public function changeRight($rgt) {
    $this->right = $rgt;
  }
}
$Adminas = new Admin();
echo "username is: $Adminas->username" . "<br />";
$Adminas->changeUserName("Tomas");

$Adminas->Login ("Tomas","ccc");


     ?>

  </body>
</html>
