<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>php</title>
    </head>
    <body>



        <h1>php test arrays</h1>

        <?php

            $human = array("name" => "Tomas", "lname" => "Tomulaitokas", "age"=>13);   //asociatyvus masyvas(associative array)

            echo "Masyvas. Vardas: ". $human['name'];

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";


            print_r($human); // naudojama atspausdinti masyvui




            echo "<br/>";
            echo "<br/>";
            echo "<br/>";



            $aa = array("Agne", "Kleblauskaite", 15);

            $human[0] = $aa;


            print_r($human);


            echo "<br/>";
            echo "<br/>";
            echo "<br/>";



            $human["pussesere"] =  $aa;

            print_r($human);
            
            
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";





            $uzsakymai = array();


            $failas = fopen("./tekstas.txt", "r") or die ("Sitas failas nerastas");

            //skaiysim faila po eilute, iki jo pabaigos (!feof)

            while(!feof($failas)){
                $eile = fgets($failas);
                //echo $eile . "<br/>";

                echo "<br/>";

                

                $preke = explode(":", $eile);

                print_r($preke);

                array_push($uzsakymai, $preke);

            }
            
            fclose($failas); // kai atlikom veksmus, uzdarom faila (atlaisvinam RAM'us)

            

            echo "<br/>";
            echo "<br/>";

            print_r($uzsakymai);
        ?>

        <div class="preke">

            <!--<h2> <?php echo $uzsakymai[0][0] ?> </h2>
            <input type="" name="" value="<?php echo $uzsakymai[0][2] ?>">
            <button type=""><?php  echo $uzsakymai[0][1]  ?> euuuuru</button>-->


            <?php

                foreach($uzsakymai as $item){
                    echo "<article>";
                        echo "<h2>$item[0]</h2>";
                        echo '<input value="'. $item[2] .'"/>';
                        echo "<button" . $item[1] . "</button>";
                    echo "</article>";
                }

            ?>


        </div>





    </body>
</html>