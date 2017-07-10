<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php - extends</title>
  </head>
  <body>
    <h1>php - extends</h1>




<?php


// uzduotis: sukurti klases "Gyvunas", "Tipas" - kuri paveldi Gyvunas, "Liutas" - kuri paveldi Tipas
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
         public $kailis = true;
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
    // 0 uzduotis
    $Simba = new Liutas();
    $Ardis = new Liutas();
    $Mufasa = new Liutas();
    // 1 uzduotis
    $Simba->spalva = "#b2b2b2";
    echo  "Simbos Spalva: " . $Simba->spalva . "<br/>";
    $Mufasa->spalva = "#f123a1";
    echo "Muufasa spalva: $Mufasa->spalva <br/>";
    $Ardis->spalva = "#fff";
    echo "Argis spalva:" . $Ardis->spalva . "<br/>";
    // 2 uzduotis
    // echo "Simbos vardas" . $Simba->name; // local/privati reiksme todel nepasiekiama
    echo "Simbos vardas: " . $Simba->getName(). "<br/>";
    $Simba->setName("Simbackinas");
    echo "Simbos vardas: " . $Simba->getName(). "<br/>";

?>



  </body>
</html>
