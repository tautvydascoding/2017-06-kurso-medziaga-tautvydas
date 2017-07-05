<?php

  echo "Tartotojo vardas: " . $_GET['username'] . "<br />";

  session_start();
  $_SESSION['prekiukrepselis'] = array ("Duona", "Sviestas", "Kalkes");
  print_r($_SESSION);
 ?>
