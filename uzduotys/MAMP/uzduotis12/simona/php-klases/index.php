<?php

echo "<h1>testuoju</h1>";

$username = "tom"; //globalus kintamasis, nes yra uz klases ribu

class Masina { //visi kintamieji, esantys klases viduje, yra lokalus
  private $greitis = 220;  //jei neparasome pries kintamaji jokio zodzio, jie visi tampa public
  private $svoris = 2.12;
  private $naujoKaina = 50000;
  public $verte = 21000;
  public $amzius = 6;

  private function apskaiciuotiVerte() {
    $this->verte = $this->naujoKaina / $this -> amzius;
  }

  function setSvoris($x) {
  $this->svoris = $x;
  $this->apskaiciuotiVerte();
  }


  function printAll() {
    echo "greitis: " . $this->greitis . "<br />";  //tam, kad prieitume prie konkretaus kintamojo, reikia iterpti $this->
    echo "svoris: $this->svoris <br />";
  }
}

$Opel = new Masina();
$Opel -> printAll();
$Audi = new Masina();
$Mersedes = new Masina();
echo "pakeitus verte i 2000: <br />";
$Mersedes -> verte = 2000;
$Mersedes -> printAll();
$Mersedes -> setSvoris(1.5);
echo "pakeitus svori i 1.5: <br />";
$Mersedes -> printAll();

//5 ir dvi zemiau einancios eilutes siejasi. 35 ir 36 eilutemis deklaruojam, kad naudosime globalia reiksme.
global $username;
echo "username: $username <br />";

?>
