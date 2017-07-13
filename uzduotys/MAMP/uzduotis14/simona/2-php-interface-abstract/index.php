<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Interface and Abstract</title>
  </head>
  <body>



<?php
// EDIT
// interface apibrezia remus/taisykles, kas tavo kode turi buti
interface Edit
{
  // Interface negali tureti kintamuju!!!
  public function changeName($a);
  public function isLogin();
  public function getName();
}

// USER
abstract class User
{
  // abstrakciu kintamuju negali buti
  // galima ir taip: var $name, $password, $createdDate; $lastLogin;
  // sukurti kintamieji yra nesunaikinami
  public $name = user,
  public $psw = password,
  public $crtdt = createdDate,
  public $lstlogin = lastLogin;

// abstract f-ijos negalima suprogramuoti. reiskia dabar neprogramuosiu ir kas paveldes sia funkcija, tas suprogramuos
// abstract f-ija Logout pagal nutylejima yra viesa, ne privati. Visos abstrakcios f-ijos turi buti
    abstract function Logout();
    function clearLastLoginTime();
      // $this->lastLogin = date("h:i:sa");
      $this->lastLogin = 0;
}

// ADMIN
class Admin extends User implements Edit;
    public function isLogin() {
    // code...
    private function Logout () {
    // code...
    public function changeName() {
      $this->name = $x;
    // code...
    public function getName(){
      return $this->name;
          }
        }
      }
    }

$username=new Admin();
echo "vartotojo vardas: " . $useris->getName() . "<br />";
  // public function getName();
  // return "Admin";




?>



  </body>
</html>
