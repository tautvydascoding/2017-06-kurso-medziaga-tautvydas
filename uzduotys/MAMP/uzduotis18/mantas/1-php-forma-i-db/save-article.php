<?php

  echo "labuka <br />";

  echo "Title: " . $_GET['article-title'] . "<br />";
  echo "Content: " . $_GET['article-content'] . "<br />";

include_once ('./db.php');

$title = $_GET['article-title'];
$content = $_GET['article-content'];
$user_id = 1;

createArticle($title, $content, $user_ID);
echo "<h2>Jusu straipsnis issaugotas</h2>";


$straipsnis = getArticle(3);
// print_r($straipsnis);
echo "<h2>" . $straipsnis['title'] . "</h2>";
echo "<p>" . $straipsnis['content'] . "</p>";

?>
