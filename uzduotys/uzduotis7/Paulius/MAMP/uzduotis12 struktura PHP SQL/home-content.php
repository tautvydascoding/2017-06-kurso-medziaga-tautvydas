<?php

    echo " home-content.php <br />";

    include_once('./db.php');

?>
    <section>
        <?php

    $visiStraipsniai = getArticles();
        /// mysqli_fetch paima is visu viena straipsni
        $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
        while($straipsnis) {
            include('./article.php');
            $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
} ;
    
    

?>
    </section>
