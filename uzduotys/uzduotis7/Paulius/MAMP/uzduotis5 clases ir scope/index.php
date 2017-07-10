<?php
echo "<h1>veikla</h1>";

    //sukuriame klase Masina su kintamaisiais greitis, svoris.
    //sukurti funkcija "pirintAll()"
    
    
$username = "Jonas"; ///padareme ji globaliu


class Masina{
    public $greitis = 220;   
    private $svoris = 2.12;
    private $naujokaina = 3000;
    public $verte = 100; 
    public $amzius = 2;
    
    private function apskaiciuotiVerte(){
        $this->verte = $this->naujokaina / $this->amzius; /////privati funkcija
    }
    
    
    function setSvoris($x){
        $this->svoris = $x;
        $this->apskaiciuotiVerte();
    }
    
     
    function printAll() {
        echo "Greitis: " . $this->greitis . "<br />";
        echo "Svoris: $this->svoris <br>";
        ///bandom atspausdinti username
        global $username; ////todel dadedu "global", tuomet matysime tose skliaustuose.
        echo "vardas: $username <br>";
    }
}

$Opel = new Masina(); ///sukuriame nauja objekta, naudojantis Masisos klase
$Opel->printAll();
$Audi = new Masina();
$Mercedes = new Masina();
$Mercedes->greitis = 260;
$Mercedes->printAll();
$Mercedes->setSvoris(5);
echo "pakeitus auto svori i 5t : <br> ";
$Mercedes->printAll();
?>

