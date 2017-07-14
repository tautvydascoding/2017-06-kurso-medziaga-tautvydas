<?php
//logine dalis//
define("SERVERNAME", "localhost");
define("USERNAME", "mantasman1");
define("PASSWORD", "sonyso");
define("DB_NAME", "testuoju");



$connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
if ($connection) {
  echo "prisijungt prie DB pavyko <br />";
} else {
  echo "Prisijungt prie DB nepavyko" . mysqli_connect_error() . "<br />";
}
// uzduotis
// sukurti f-ja createArticle($connection, $title, $content, $date, $user_ID)
// sukurti f-ja editeArticle($id, $connection, $title, $content, $date, $user_ID)
// sukurti f-ja deleteArticle($connection, $id)
// sukurti f-ja getArticle($connection, $id)
// sukurti f-ja getArticles($connection)
// sukurti f-ja getArticlesByTittle($connection, $searchTerm)
      // SELECT * FROM articles
      //   WHERE

//article talpinimo//
function createArticle($connection, $title="title", $content="content", $user_Id="user_Id")
{
  $sql = "INSERT INTO articles VALUES ('', '$title', '$content', NOW(), '$user_Id'); "; ///prideti default laika kaip stringo elementa
  $status = mysqli_query($connection, $sql);
  if ($status == false) {
    echo "Nepavyko ikelti article <br />";
  } else {
    echo "sveikinu sukurus: " . $title . "<br />";
  }
}
// createArticle($connection, 'all monsters are humans', 'tratrataaaaboooo booooo', '2012-02-06', 'Petras R.')

//article redagavimas
function editArticle($connection, $title="title", $content="content", $user_Id="user_Id", $id="id") {
  $sql = "UPDATE articles SET title='$title', content='$content', user_Id='$user_Id' WHERE id='$id'; ";
  $status = mysqli_query($connection, $sql);
  if ($status ==false) {
    echo "Nepavyko redaguoti straipsnio informacijos <br />";
  } else {
    echo "Jums pavyko redaguoti straipsni <br />";
  }
}
// editArticle($connection, "Vasaros nera", "Siemet vasaros nebus", "Sulija", "3")

///article trynimo
function deleteArticle ($connection, $id)
{
  $sql = "DELETE FROM articles
          WHERE id = $id";
  $status = mysqli_query($connection, $sql);
  if ($status) {
    echo "Straipsnis nr: $id istrintas sekmingai";
  } else {
    echo "Nerastas straipsnis nr. $id";
  }
}
////////////
// f-ja getArticle($connection, $id)

function getArticle($connection, $id) {
  $sql = "SELECT * FROM articles
        WHERE id = $id";
        $results = mysqli_query($connection, $sql);
        $article = mysqli_fetch_assoc($results);
        if ($article) {
          print_r($article);
        } else {
          echo "nr. $id straipsnio neradom <br />";
        }
        return $results;
}
// getArticle($connection, 2);

// UZDUOTIS f-ja getArticles($connection)

function getArticles($connection) {
  $sql = "SELECT * FROM articles";
  $results = mysqli_query($connection, $sql);
  if (mysqli_num_rows($results) > 0) {
    print_r($results);
  } else {
    echo "Rasta 0 straipsniu" . mysqli_error($connection) . "<br />";
  }
  return $results;
}
// $allArticles = getArticles($connection);
// $articleData = mysqli_fetch_row($allArticles);
//
// while ($articleData) {
//    echo "<br />" . $articleData[4];
//   $articleData = mysqli_fetch_row($allArticles);
// }


////f-ja getArticlesByTittle($connection, $searchTerm)
      // SELECT * FROM articles
      //   WHERE

      function getArticlesByTittle($connection, $searchTerm) {
        $sql = "SELECT * FROM articles
              WHERE title LIKE '%$searchTerm%'";
        $results = mysqli_query($connection, $sql);
        if (mysqli_num_rows($results) > 0) {
          print_r($results);
        } else {
          echo "Rasta 0 straipsniu" . mysqli_error($connection) . "<br />";
        }
        return $results;
      }
      $allArticlesByTitle = getArticlesByTittle($connection, "Vasar");
      $articleData = mysqli_fetch_row($allArticlesByTitle);

      while ($articleData) {
         echo "<br />" . $articleData[1] . "<br />" . $articleData[2];
        $articleData = mysqli_fetch_row($allArticlesByTitle);
      }



 ?>
