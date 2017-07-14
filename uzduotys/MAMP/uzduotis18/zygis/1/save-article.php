<?php

    include_once './db.php';

    // print_r($_GET);


    $pavad = $_GET["article-title"];
    $straips = $_GET["article-content"];

    echo "<h3>straipsnio pavadinimas: </h3>" . $pavad . "<br/>";
    echo "<h3>straipsnis: </h3>" . $straips . "<br/>";



    createArticle($pavad, $straips, 2);

    // echo "<h2>Straipsnis issaugitas</h2>";

    $straipsnis = getArticle(10);


    // print_r($straipsnis);



    echo "<h2>" . $straipsnis['title']. "</h2>" . "<br/>";
    echo "<p>" . $straipsnis['content']. "</p>" . "<br/>";
    echo "<h6>" . $straipsnis['date']. "</h6>" . "<br/>";

?>

