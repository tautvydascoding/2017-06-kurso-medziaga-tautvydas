<?php

  define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');

      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if ( $connection) {
          echo "Prisijungti pavyko <br />";
        } else {
          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        }
        return $connection;
      }
  $con = connect_DB();  
 
  $request=$_POST['request'];
   $query="SELECT * FROM skelbimai 
        WHERE (tinkamas_rodyti='tinkamas') AND (miestas='$request')";

if (mysqli_num_rows($request)==0) {
    echo "<h1>Nieko nerasta</h1>";
} else {
    
  $output=mysqli_query($con,$query);

echo '<table border="1"';
   echo '<tr>
<th>Pavadinimas</th>
<th>Data</th>
<th>Email</th>
<th>Miestas</th>
<th>Tipas</th>
<th>Registracija</th>
<th>Aprasymas</th>
</tr>';

  while($row = mysqli_fetch_assoc($output))
  {
    
    echo '<tr>';
    echo "<td>" . $row['pavadinimas'] . "</td>";
    echo "<td>" . $row['data_'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['miestas'] . "</td>";
    echo "<td>" . $row['tipas'] . "</td>";
    echo "<td>" . $row['registracija'] . "</td>";
    echo "<td>" . $row['aprasymas'] . "</td>";
      echo '</tr>';
    
  };
echo '</table>';
}
 ?>