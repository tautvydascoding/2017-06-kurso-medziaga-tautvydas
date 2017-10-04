<?php


  echo "Vartotojo vardas: " . $_GET['username'] " <br />"
  
  print_r($_GET); 
  
  session_start();
    $_SESSION['prekiukrepselis'] = array ("Duona","sviestas", "kalkes");
    print_r($_SESSION);
  
  

  
  ?>

