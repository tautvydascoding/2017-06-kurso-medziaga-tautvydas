<?php

echo "<h1>labas</h1>";

$username = "Tom";
class Masina {
  private $greitis = 220;
  private $svoris = 2.12;
  private $naujoKaina = 50000;
  public $verte = 21000;
  public $amzius = 6;


function setSvoris($x) {
  $this->svoris = $x;
  $this->apskaiciuotiVerte();
}
private function apskaiciuotiVerte() {
  $this->verte = $this->naujoKaina / $this->amzius;

}

  function printAll() {
    echo "Greitis: " . $this->greitis . "<br />";
    echo "svoris: $this->svoris <br />";
// IDEA: liepam surasti globale reiksme
    global $username;
    echo "username: $username <br />";
  }
}

$Opel = new Masina();   // IDEA: sukuriam nauja oblekta, naudojant masinos klase
$Opel->printAll();
$Audi = new Masina();
$Mersedes = new Masina();
echo "pakeitus verte i 2000: <br />";
$Mersedes->verte = 2000;
$Mersedes->printAll();
$Mersedes->setSvoris(1.5);
echo "pakeitus svori i 1.5: <br />";
$Mersedes->printAll();

 ?>
