<?php

    echo "articles.php <br />";
    include_once('./db.php'); // idedame komandas, kad galetuem jas issaukti
?>


<section>
  <?php
     $allArticles = getArticles(3);
     // mysqli_fetch - paima is is visu gautu straipsniu viena
     $article = mysqli_fetch_assoc($allArticles);

      // while ($article) {
      //     include('./article.php'); // idedam straipsni
      //
      //     // !!! mysqli_fetch - paima is is visu gautu straipsniu sekanti
      //     $article = mysqli_fetch_assoc($allArticles);
      // }

      for ($i=0; $i < 3; $i++) {
        include('./article.php'); // idedam straipsni

        // !!! mysqli_fetch - paima is is visu gautu straipsniu sekanti
        $article = mysqli_fetch_assoc($allArticles);
      }
   ?>
</section>
