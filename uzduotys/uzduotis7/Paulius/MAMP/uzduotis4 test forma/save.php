<?php

echo "vartotojo vardas: " . $_GET["username"] . "<br>";    //////globalus kintamasis
echo "vartotojo amzius: " . $_GET["userage"] . "<br>"; 

session_start();
$_SESSION["prekiuvezimux"] = array ("vaistai", "akiniai", "kristalai");


print_r($_SESSION);



?>



