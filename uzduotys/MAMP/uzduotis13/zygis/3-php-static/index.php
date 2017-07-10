<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Static</title>
    </head>

    <body>


        <?php

            echo "<h1>Dirbam su static kintamaisias </h1>";

            $b = 0;

            function count2(){

                global $b; //paima virsuj, uz f-jos ribu esancia, globalia reiksme
                static $a = 0;
                echo $a . "<br/>";
                echo $b . "<br/>";
                $a++;
                $b++;
                        
            }

            count2();
            count2();
            count2();
            count2();


        ?>


    </body>


</html>