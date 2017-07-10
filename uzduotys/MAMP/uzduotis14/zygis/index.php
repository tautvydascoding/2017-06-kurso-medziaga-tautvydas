<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8"/>
        <title>Classes inheritance</title>


    </head>


    <body>
        <h1>PHP paveldimumas</h1>


        <?php

        class Gyvunas {
            public $alive = true;
            public $positionX;
            public $positionY;
        }



        class Tipas extends Gyvunas {
            public $rusis = "kate";
            public $maistas = "kiti gyvunai";
        }



        class Liutas extends Tipas{
            public $kailis = true;
            public $spalva = "#a34baa";
            private $amzius = 5;
            private $name;


            public function setName($x){
                $this->name = $x;
            }

            public function getName(){
                return $this->name;
            }
        }


        //uzd.1 - susikurt tris liutus (objektus)

        $Simba = new Liutas();
        $Ardis = new Liutas();
        $Mufasa = new Liutas();



        //uzd.2 - pakeist ju spalvas

        $Simba->spalva = '#b2b2b2'; 
        $Ardis->spalva = '#000'; 
        $Mufasa->spalva = '#BFA039'; 

        echo "simbos saplva: ". $Simba->spalva."<br/>";
        echo "ardzio saplva: ". $Ardis->spalva."<br/>";
        echo "mufasa saplva: ". $Mufasa->spalva."<br/>";




        $Simba->setName("Simbuka");
        echo $Simba->getName();




        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";



        //uzd.3

        class User {
            public $username = "Algis";
            private $password = "pas123";
            private $rights;

            public function login($name, $pass){
                if($name === $this->username && $pass === $this->password){
                    echo "Login succesfull"."<br/>";
                }else{
                    echo "Incorrect username or password"."<br/>";
                }
            }


            public function getUsername(){
                return $this->username;
            }

        }


    
      




        class Admin extends User{
            public function changeUserName($nm){
                $this->username = $nm;
                echo "New username is: ". $nm . "<br/>";
            }

            public function changeRights($rgt){
                $this->rights = $rgt;
                echo "New rights are: ". $rgt . "<br/>";
            }
        }



        $Adminas = new Admin();
        
        
        $Adminas->login("Algis", "pas123");


        
        echo "Username is: $Adminas->username"."<br/>";
        $Adminas->changeUserName("Birute");

        $Adminas->login("Algis", "pas123");
        

        






        ?>


        


    </body>

</html>