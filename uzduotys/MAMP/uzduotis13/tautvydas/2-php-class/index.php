<?php



echo " <h1> veikiu</h1>";

// uzduotis:
// sukurti sukurti klase Masina
// su kintamaisiais: greitis, svoris
// su f-ja "printAll()"

$username = "Tom"; // GLOBALUS kintamasis

class Masina {
    private $greitis = 220;   // local
    private $svoris = 2.12;     // local
    private $naujoKaina = 50000;    // local
    public $verte = 21000;       // local
    public $amzius = 6;



    private function apskaiciuotiVerte() {
      $this->verte = $this->naujoKaina / $this->amzius;
    }
    function setSvoris($x) {
      $this->svoris = $x;
      $this->apskaiciuotiVerte();
    }
    function printAll() {
      echo "Greitis: " . $this->greitis . "<br />";
      echo "svoris: $this->svoris <br>";
      // liepiam surasti globale reiksme
      global $username;
      echo "username: $username <br />";
    }
}

$Opel = new Masina(); // sukuriam nauja objekta, naudojantis Masinos kalse
$Opel->printAll();
$Audi = new Masina();
$Mersedes = new Masina();
echo "pakeitus verte i 2000: <br>";
$Mersedes->verte = 2000;
$Mersedes->printAll();
$Mersedes->setSvoris(1.5);
echo "pakeitus svori i 1.5:   <br>";
$Mersedes->printAll();






?>
