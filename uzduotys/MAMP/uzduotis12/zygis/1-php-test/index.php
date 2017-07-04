<?php



echo "<h1>didelis tekstas</h1>";

$vardas = "Tomas";

echo "Mano vardas $vardas <br/>";
echo 'Mano vardas $vardas <br/>';



echo "name's $ <br/>";
echo 'name\'s $'; 

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


define("DATABASENAME", "DB_names");
define("ARTICLECOUNT", 8);


echo "duomenu baze " . DATABASENAME . " turi ". ARTICLECOUNT ." straipsniu";



echo "<br/>";
echo "<br/>";
echo "<br/>";




$lname = "TOmka";

if(strlen($lname) <= 20) {
    echo "pavarde pakankamai trumpa";

    if($lname === "Tomka"){
        echo "nu taigi cia tomka!";

    } elseif($lname === "TOmka"){
        echo "dabar jau tikrai Tomka";
    }
} else {
    echo "peri lga";
}



echo "<br/>";
echo "<br/>";
echo "<br/>";




//foreach - dirbti su masyvais


$names = [1,2,3,6,9,8,5,7,4];

foreach ($names as $name) {
    echo $name; 
}


?>