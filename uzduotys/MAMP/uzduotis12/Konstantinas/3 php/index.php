 <!DOCTYPE html>
 <html>
    <head>
	   <meta charset="utf-8">
	   <title></title>
	</head>
	<body>
	
	   <h1>test PHP ARRAYS</h1>
	
	
	   <?php
	   $aa = array("Tomas", "Koliutaciukaitis", 65);
	   $human = array("name"=> "Tomas", "1name" => "Tomulaitokas", "age" =>13);
	   echo "Masyvas. Vardas:" . $human['name'] . "<br/>";
	   print_r($human);
	   $human[0] = $aa;
	   // arba
	   $human["pusbrolis"] = $aa;
	   
	   print_r($human);
	   
	   echo "<br /><br />";
	   
	   //==========================================================================
	   // uzduotis issaugoti uzsakymo duomenis kaip masyvo elementus 
	   $uzsakymai= array();
	   $failas = fopen("./tekstas.txt", "r") or die ("tekstas.txt failas nerastas!");
	   // skaitysime faila po 1 eilute,tol kol nesutiksime failo pabaigos simbolio
       while ( !feof($failas)) {
		   $eil = fgets($failas);
		   echo "<br />";
           // echo eil . "<br>"; // isvedame viena eilute is failo 
		   $preke = explode(":", $eil);
		   prin_r($preke);
		   
		   array_push(uzsakymai,$preke);
	   }
	   fclose($failas); // uzdaromas failas (atlaisviname RAM atminti)
		 

        echo "<br /> Uzsakymai:";
		echo "<br />;
		  print_r($uzsakymai);
		     ?>
			 
			 
			<div class="preke">
		        <h2><?php echo $uzsakymai [0] [0] ?></h2>
			</div>
			
			<?php
			   foreach ($uzsakymai as $itemArray) {
				 echo "<article>";  
				     echo "<h2>$itemArray[0]</h2>";
					 echo ' <input value=""/>';
					 echo "<br/>"
					 echo '<button>' . $itemArray[2] . ' "/>';
                     echo <article>					 
			
			
		</body>
</html>	