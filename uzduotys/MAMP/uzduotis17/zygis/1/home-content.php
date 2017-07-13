<?php

echo "home-content.php";


echo "<br/>";
echo "<br/>";
echo "<br/>";

include_once './db.php';



?>




<section>
    

<?php 
    $visiStraipsniai = getArticles($connection);
?>

</section>