<?php


  echo "labas  <br /> <br /> <br />";
  //uzduotis: isvesti title ir contnet ivestus laukus
  echo "title: ". $_GET['article-title'] ."<br>";
  echo "turinuys:" . $_GET['article-content'] . " <br />";
  // print_r($_GET);


  include_once('./db.php');


  // ===============ISSAUGOME straipnsni DB-je====
  // paimamae ka ivede vartotojas i forma
  $title = $_GET['article-title'] ;
  $content = $_GET['article-content'];
  $user_ID = 2;
  createArticle($title, $content, $user_ID);

  echo "<h2>Jusu straipsnis issaugotas</h2>";

  // ===============Atvaizduojame 7 straipnsni====
  $straipsnis = getArticle(7);
  // print_r($straipsnis);
  echo "<h2>" . $straipsnis['title'] . "</h2>";
  echo "<p>" . $straipsnis['content'] . "</p>";
  echo "<h6>" . $straipsnis['date'] . "</h6>";
 ?>
