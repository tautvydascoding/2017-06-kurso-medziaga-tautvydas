<?php

echo "Vartotojo vardas: ". $_GET['username'];

echo "<br/>";


session_start(); //pradeda sesija

$_SESSION['prekiuKrepselis'] = array("Duona", "Kastuvas", "Sviestas");


print_r($_SESSION);



?>