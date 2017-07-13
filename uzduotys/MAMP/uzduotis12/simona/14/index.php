<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Simba </title>
</head>

<body>


<?php

class Gyvunas {
  public $alive = true;
  public $positionX;
  public $positionY;
}
class Tipas extends Gyvunas {
  public $rusis = "kate";
  public $minta = "mesa";
}

class Liutas extends Tipas {
  public $kailis = true;
  public $spalva = "#a34baa";
  private $amzius = 5;
  private $name = "bevardis";
  public function getName() {
    return $this->name;
  }
  public function setName($x);
    $this->name = $x;
}
<!-- O uzduotis -->
$Simba = new Liutas();
$Ardis = new Liutas();
$Mufasa = new Liutas();

<!-- 1 uzduotis -->
$Simba->spalva = "#b2b2b2";
echo "Simbos spalva: . $Simba->spalva . <br />";

$Ardis->spalva = "#fff";
echo "Ardžio spalva: . $Ardis->spalva . <br />";

$Mufasa->spalva = "#000";
echo "Mufasa spalva: . $Mufasa->spalva . <br />";

<!-- 2 uzduotis -->
<!-- echo "Simbos vardas" .$Simba->name; -->
<!-- local/private reiksme, todėl nepasiekiama -->
echo "Simbos vardas:" . $Simba->getName();
$Simba->setName("Simbukas");
echo "Simbos vardas:" . $Simba->getName() .


?>





</body>

</html>
