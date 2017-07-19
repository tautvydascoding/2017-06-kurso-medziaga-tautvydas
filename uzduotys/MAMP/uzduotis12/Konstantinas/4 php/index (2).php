<?php



echo " <h1> veikiu</h1>";

// uzduotis:
// sukurti klase Masina
// su kintamaisiais: greitis,svoris
// su f-ja "printAll()"

$username = "Tom";

class Masina {
	private $greitis = 220;
	private $svoris = 2.12;
	private $naujoKaina = 50000;
	public $verte = 21000;
	
	function setSvoris($x) {
	  $this->svoris = $x;
    }
	private function apskaiciuotiVerte() {
		$this->verte = $this->naujoKaina / $this->amzius;
	}   
		apskaiciotiVerte();
	}
	
	function printAll() {
	  echo "Greitis: " . $this->greitis . "<br />";
      echo "svoris: $this->svoris . <br>";
	  // liepiam surasti globale reiksme
	  global $username;
	  echo "username: $username <br />"
	}
}	
	  
	$Opel = new Masina(); // sukuriam nauja objekta,naudojantis Masinos klase  
	$Opel->printAll();  
	$Audi = new Masina();  
	$Mersedes = new Masina();
    $Mersedes->verte = 2000;
    $Mersedes->printAll();
	$Mersedes->setSvoris(1.5);
	echo "pakeitus svori i 1.5 :   <br>"
?>   
