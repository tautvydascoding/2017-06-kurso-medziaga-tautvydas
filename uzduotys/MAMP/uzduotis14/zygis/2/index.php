<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>php interfeisai/abstrakcijos</title>
    </head>
    <body>
        <h1>Veikia</h1>


        <?php

        interface Edit {
           // $pavadinimas = "name"; INTERFEISAI NEGAI TURET KINTAMUJU!!!!!!!!!!!
            public function changeName($a);
            public function isLogin();
            public function getName();
        }

        abstract class User {
            //abstract $polis = "siaure"; ABSTRAKTUS KINTAMIEJI NEGALIMI IR TAI YRA NESAMONE!!!!!!
            public $name;
            private $password;
            private $createDate;
            public $lastLogin;

            abstract public function logout(); //abstract f-jos negalima suprogrmauoti, ja aprasys tas kas ja paveldi

            public function clearLastLoginTime(){
                $this->lastLogin = null;
            } 
        }

        class Admin extends User implements Edit {
    
                 public function logout(){
                    //code
                }

                public function changeName($a){
                    $this->name = $a;
                }

                public function isLogin(){
                    //code
                }

                public function getName(){
                    return $this->name;
                }
        }


        $Adminas = new Admin();
        $Adminas->changeName("Marelis");
        echo $Adminas->getName();

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        echo "Last login time is " . date("h:i");



        ?>


    </body>
</html>