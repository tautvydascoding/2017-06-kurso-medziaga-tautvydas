<?php

  echo "Comment:" . $_GET['comment'] . " <br />";
  // print_r($_GET);

  include_once('./db.php');

  $comment = $_GET['comment'];
  createComment($comment);

  echo "<h2>Comment saved</h2>";

  // $straipsnis = getArticle(7);
  // // print_r($straipsnis);
  // echo "<h2>" . $straipsnis['title'] . "</h2>";
  // echo "<p>" . $straipsnis['content'] . "</p>";
  // echo "<h6>" . $straipsnis['date'] . "</h6>";
 ?>
