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

<div id="table-container">
    <?php
  
  $query="SELECT * FROM skelbimai WHERE miestas='Marijampoles'"; 
  $output=mysqli_query($con,$query);
    
    
    
echo '<table class="table table-responsive" border="1">';
  ?>
    <tr>
<th  class="easy-modal-open" href=".modal1">Pavadinimas</th>
<!--
<th>Data</th>
<th>Email</th>
<th>Miestas</th>
<th>Tipas</th>
<th>Registracija</th>
<th>Aprasymas</th>
-->
<!--
<h1 class="easy-modal-open" href=".modal1" >Mano modalas</h1>
<h1 class="easy-modal modal1 easy-modal-close">Tekstux</h1>
-->
</tr>
    
    <?php


  while($row = mysqli_fetch_assoc($output))
        {
            
            
    echo '<h1 class="easy-modal-open" href=".modal1">HEY HO</h1>';
            
    echo '<tr>';
    echo "<td class='easy-modal-open' href='.modal1'>" . $row['pavadinimas'] . "</td>";
            
//    echo "<td>" . $row['data_'] . "</td>";
//    echo "<td>" . $row['email'] . "</td>";
//    echo "<td>" . $row['miestas'] . "</td>";
//    echo "<td>" . $row['tipas'] . "</td>";
//    echo "<td>" . $row['registracija'] . "</td>";
//    echo "<td>" . $row['aprasymas'] . "</td>";
      echo '</tr>';
    
  };
echo '</table>';

 ?>
</div>





