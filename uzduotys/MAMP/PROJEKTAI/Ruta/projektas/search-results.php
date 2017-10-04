<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title>Ruta Travels</title>
  </head>
  <body>

    <?php include('./nav.html'); ?>

    <div class="row">
      <div class="col-md-4">
        <ul class="small-thumbnail">
          <?php

            // echo "Search term: ". $_GET['query'] ."<br>";

            include_once('./db.php');

            $query = $_GET['query'] ;

            function getArticlesByQuery() {
              $sql = " SELECT * FROM articles
                        WHERE title LIKE '%".$_GET['query']."%'; "; //%$query%
              $connect = connect_DB();
              $results = mysqli_query($connect, $sql);

              if( !$results) {
                echo "Neapvyko rasti straipsniu!!! ". mysqli_error($connect) . " <br>";
             }  else {
                mysqli_num_rows($results);
             }
              return $results;
            }

            $articleFound =  getArticlesByQuery($query);
            print_r($articleFound);
            $article = mysqli_fetch_assoc($articleFound);

            while ($article) {
                include('./article.php');
                $article = mysqli_fetch_assoc($articleFound);
            }

            ?>
        </ul>
      </div>
    </div>
  <?php include('./footer.html'); ?>

  <script src="lib/jquery-3.2.1.min.js" ></script>
  <script src="lib/bootstrap/js/bootstrap.min.js" ></script>

  </body>
</html>
