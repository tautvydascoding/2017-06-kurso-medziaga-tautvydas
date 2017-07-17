<?php

   define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');

      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
//        if ( $connection) {
//          echo "Prisijungti pavyko <br />";
//        } else {
//          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
//        }
        return $connection;
      }
  $con = connect_DB();

      // connect_DB();

    ////----------------------------------------------f-jia trina senus skelbimus
function trintiSenusSkelbimus(){
        $dabartineData = date("Y-m-d");
        $sql = "DELETE FROM skelbimai
                WHERE data_ < '$dabartineData'";
        $con = connect_DB();
        $status = mysqli_query($con, $sql);
    }
 trintiSenusSkelbimus();
    ////----------------------------------------------f-jia trina senus skelbimus

//$result = mysqli_query($con,"SELECT * FROM skelbimai");
//
//echo "<table border='1'>
//<tr>
//<th>Pavadinimas</th>
//<th>Data</th>
//<th>Email</th>
//<th>Miestas</th>
//<th>Tipas</th>
//<th>Registracija</th>
//<th>Aprasymas</th>
//
//</tr>";
//
//while($row = mysqli_fetch_array($result))
//{
//echo "<tr>";
//echo "<td>" . $row['pavadinimas'] . "</td>";
//echo "<td>" . $row['data_'] . "</td>";
//echo "<td>" . $row['email'] . "</td>";
//echo "<td>" . $row['miestas'] . "</td>";
//echo "<td>" . $row['tipas'] . "</td>";
//echo "<td>" . $row['registracija'] . "</td>";
//echo "<td>" . $row['aprasymas'] . "</td>";
//}
//echo "</table>";
//

?>

<script src="lib/jquery-3.2.1.min.js">
</script>
<script>
    $(document).ready(function() {
        $("#miestai").on('change', function() /// ------------------------rusiuojame miesta
            {
                var keyword = $(this).val();
                $.ajax({
                    url: 'miestoPaieska.php',
                    type: 'POST',
                    data: 'request=' + keyword,

                    beforeSend: function() {
                        $("#table-container").html('Working...');

                    },
                    success: function(data) {
                        $("#table-container").html(data);
                    },
                });
            });

        $("#tipas").on('change', function() /// ------------------------rusiuojame tipa
            {
                var keyword = $(this).val();
                $.ajax({
                    url: 'tipoPaieska.php',
                    type: 'POST',
                    data: 'request=' + keyword,

                    beforeSend: function() {
                        $("#table-container").html('Working...');

                    },
                    success: function(data) {
                        $("#table-container").html(data);
                    },
                });
            });

    });

</script>


    <?php
    
  $query="select * from skelbimai";
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


$reiksmesPatikra = $con->query("SELECT id FROM skelbimai WHERE miestas = 'kaunas'");
if($reiksmesPatikra->num_rows == 0) {
     echo "Neradome reiksmes"; // row not found, do stuff...
} else {
     echo "Reiksme rasta"; 
    
    
    
    
    
    
    
    
    
}





 ?>





