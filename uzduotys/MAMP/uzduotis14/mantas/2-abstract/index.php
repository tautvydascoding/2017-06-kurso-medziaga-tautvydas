<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>abstract</title>
  </head>
  <body>
    <h1>abstract</h1>
    <?php

    interface Edit {
      public function changeName($a);
      public function isLogin();
      public function getName();
    }
    abstract class User {
      var $name = "Tomas",
          $password = "xxx",
          $createdDate,
          $lastLogin;
      abstract public function Logout();
      public function clearlastLoginTime() {
        $this->lastLogin = 0;
      }
    }
    class Admin extends User implements Edit {
      public function changeName($a) {
        $this->name = $x;

      }
      public function isLogin() {

      }
      public function getName() {

      }
      public function Logout() {
        return $this->name;
      }
    }
    $Adminas = new Admin();
    echo "vartotojo vardas : " .$Adminas->getName() . "<br />";
















     ?>
  </body>
</html>
