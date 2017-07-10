<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Extends</title>
  </head>
  <body>
    <h1>php extends</h1>
<?php
 class Gyvunas {
   public $alive = true;
  public $positionX;
  public $positionY;
 }
 class Tipas extends Gyvunas {
   public $rusis = "kate";
   public $minta = "mesa";
 }
 class Liutas extends Tipas {
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

 $Liutas1=new Liutas();
$Liutas2=new Liutas();
$Liutas3=new Liutas();

$Liutas1->spalva = "#ddd";
$Liutas2->spalva = "#eee";
$Liutas3->spalva = "#b2b2b2";
echo "spalvos liutu: $Liutas1->spalva, $Liutas2->spalva, $Liutas3->spalva <br />";
//antra uzduotis susikurti privatu kintamaji

  // echo "Liuto vardas" . $Liutas->name; niepasiekia, nes privatus
echo "Liuto vardas - " . $Liutas1->getName(). "<br />";
$Liutas1->setName("Simba");
echo "Liuto vardas - " . $Liutas1->getName() . "<br />";

////uzduotis trys///

class User {
  public $username = "Petras";
  public $password = "Grazulis";
  public $rights = "ka";
  public function Login($name, $pass)  {
    if ($this->username == $name && $this->password == $pass ) {
      echo "Sveiki atvyke, $name <br />";
    } else {
      echo "Nepavyko prisijungti! <br />";
    }
  }
}
class admin extends User{
    public function changeUserName($nm)    {
    $this->username = $nm;
    }
    public function changeRights($rgt)    {
    $this->rights = $rgt;
    }
}

$Adminas = new admin();
echo "Username is: $Adminas->username <br />";
$Adminas->changeUserName("Petras");
echo "admino teisemis pakeiciau i " . $Adminas->username . "<br />";

$Useris = new User();
$Useris->Login("Petras", "Grazulis");





 ?>
  </body>
</html>
