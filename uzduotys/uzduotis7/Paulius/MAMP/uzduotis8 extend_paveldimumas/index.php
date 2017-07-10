<!DOCTYPE html>
<html>
<!--LAIKOMES TVARKOS COLUMN IR CONTAINER-->

<head>
    <meta charset="utf-8" />
    <title>Mokinames PHP</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- musu css failas turi buti paskutinis - jis bus lemiamas ir naudojamas galu gale-->
</head>

    
     <?php
    
    class Gyvunas {
        public $alive = true;
        public $positionY;
        public $positionX;
    }
    
    
    class Tipas extends Gyvunas {
        public $rusis = "kate";
        public $minta = "mesa";
    }
    
    class Liutas extends Tipas {
        public $kailis = true;
        public $spalva = "red";
        private $amzius = 5;
        private $name = "LiutoVardasYraGrazus";
        public function getname() {
            return $this->name;
        }
        public function setname($x){
           $this->name = $x;
        }
    }
    
    
    $Simba = new Liutas();          
    $Ardis = new Liutas();
    $Mufasa = new Liutas();
    
    $Simba->spalva = "blue"; ///////taip pasiekiame ir pakeiciame kintamaji
    echo "Simbos spalva: " . $Simba->spalva . "<br>";  //// taip issivedame kintamaji
    $Mufasa->spalva = "green";
    echo "Mufasos spalva: " . $Mufasa->spalva . "<br>";
    $Ardis->spalva = "yellow";
    echo "Ardzio spalva: " . $Ardis->spalva . "<br>";
    
    //////////////////////////////////////////////
    
//    echo "simbos vardas: " . $Simba->name; ////nieko nenutiks, kadangi name privatus
    echo "simbos vardas: " . $Simba->getname()  . "<br>";
    $Simba->setname("sibmukas");
    echo "simbos new vardas: " . $Simba->getname()  . "<br>";
    
   
    
    
    
    
    
    
    
    
    
    ?>


<body>

   
    

    
</body>

</html>
