

<?php

    echo "<h1>Klases ir scope'ai</h1>";

    //sukurti klase masina
    //kintamieji: greitis, svoris
    //su f-ja "printAll()"


    $username = "Tom"; //globalus kintamasis




    class Masina {
        private $greitis = 220;
        private $svoris = 2.12;
        private $naujoKaina = 35000;
        public $verte = 15000;
        public $amzius = 6;
        






        function setSvoris($x){
            $this->svoris = $x;
            $this -> apskaiciuotiVerte();
        }

        private function apskaiciuotiVerte() {
            $this->verte = $this->naujoKaina / $this->amzius;
        }


        function printAll(){
            echo "Greitis: " . $this->greitis. "<br/>";
            echo "Svoris: $this->svoris <br/>";
            echo "Kaina salone: $this->naujoKaina <br/>";
            echo "Verte dabar: $this->verte <br/>";
            //bandom atspausdint globalu kintamaji

            global $username; //parasom, kad virsuj (virtuvej) aprasytas kintamasis butu matomas cia
            echo $username. "<br/>";        


        }
    }

    $Volvo = new Masina(); //kuriame objekta pagal auksciau sukurta "Masina" klase

    $Volvo -> printAll();
    $Volvo -> verte = 3500;
    $Volvo -> setSvoris(2);
    echo "pakeitus dalykus: <br/>";
    $Volvo -> printAll();



?>