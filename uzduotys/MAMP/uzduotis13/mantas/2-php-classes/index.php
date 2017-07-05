<?php

echo "<h1>veikiu</h1>";
$username = "Tom";
class Masina {
  public $greitis = 220;
  public $svoris = 2.12;

  function printAll() {
    echo "Greitis: " . $this->greitis . "<br />";
  echo "svoris: $this->svoris <br/>";
}

}

$opel = new Masina(); // sukuriam objekta
$opel->printAll();
$audi = new Masina();
$mersedes = new Masina();
$mersedes->greitis = 260;
$mersedes->printAll();



 ?>
