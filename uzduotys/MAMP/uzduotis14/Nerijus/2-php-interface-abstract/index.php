<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php interface ir abstract</title>
  </head>
  <body>

<?php


interface Edit {
public function isLogin();
public function changeName($a);
public function getName();
}


abstract class User {
  var $name = "Tomas",
  $password,
  $createdDate,
  $lastLogin;

  abstract function Loguot(); // IDEA: abscts funkcijos negalima suprogramuoti, programuos tik tas kas ja paveldi
  function clearlastLoginTime() {
    // $this->lastLogin = date("h:i:sa")
    $this->lastLogin = 0;
  }
}

class Admin extends User implements Edit {
  public function isLogin() {
    // code.....
  }
  public function logout() {
  // code.....
  }
  public function changeName($x) {
    // code.....
  }
  public function getName() {
    // code.....
  }
}



 ?>





  </body>
</html>
