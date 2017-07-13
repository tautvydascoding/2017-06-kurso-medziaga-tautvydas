<?php

echo "Vartotojo vardas:" .
$_GET['username'] . "<br />";


session_start();
$_SESSION ['prekiukrepselis'] = array("duona", "sviestas", "kalkes");
print_r($_SESSION);

?>
