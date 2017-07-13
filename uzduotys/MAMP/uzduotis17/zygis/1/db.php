<?php

//uzduotis
//sukurti f-jas: 
        //createArticle($connection, $title, $content, $date, $user_id);
        //deleteArticle($connection, $id);
        //editArticle($connection, $title, $content, $date, $user_id, $id);
        //getArticle($connection, $id);
        //getArticles($connection);


        //getArticleByTitle($connection, $searchTerm);


        echo "db.php";
        

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";


        function dbConnect($HOST = "localhost", $USERNAME = "zygis", $PASSWORD = "ponaipizonai", $DB_NAME = "testuoju"){
            $connection = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME);

            if($connection){
                echo "prisijungem sekmingai<br/>";
            }else{
                echo "nepavyko prisijungti<br/>";
            }

            return $connection;
        }




        function createArticle($conn, $title, $content, $user_id){
            $query = "INSERT INTO articles (title, content, user_id) VALUES ('$title', '$content', '$user_id');";

            $result = mysqli_query($conn, $query);

            
            if ($result){
                echo "<h3>Naujas straipsnis ikeltas</h3>";
            }else{
                echo "<h3>Nepavyko ikelti straipsnio</h3>" . msqli_error($conn);
            }

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";

      }


        //createArticle(dbConnect(), 'pvogimas', 'sitas taip pat ne pavadinimas', 4 );


        function deleteArticle($conn, $id){
            $query = "DELETE FROM articles WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if($result){
                echo "<h3> straipsnis istrintas</h3>";
            }else{
                echo "<h3> Nepavyko istrinti</h3>"  . msqli_error($conn);
            }

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            
        }

        //deleteArticle(dbConnect(), 5);



        function editArticle($conn, $title, $content, $user_id, $id){
            $query = "UPDATE articles SET title = '$title' , content = '$content' , user_id = '$user_id' WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);

            if ($result){
                echo "<h3>straipsnis pakeistas</h3>";
            }else{
                echo "<h3>nepavyko pakeisti straipsnio duomenu</h3>"  . msqli_error($conn);
            }
        }


        //editArticle(dbConnect(), "pavadinimas", "dar biski kitaip bus",  9, 3);

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";






        function editArticle2($conn, $columnName, $newValue, $id){
            $query = "UPDATE articles SET `$columnName` = '$newValue' WHERE id = '$id'";

            $result = mysqli_query($conn, $query);

              if ($result){
                echo "<h3>straipsnis pakeistas 22222</h3>";
            }else{
                echo "<h3>nepavyko pakeisti straipsnio duomenu 22222</h3>"  . msqli_error($conn);
            }
        }


        //editArticle2(dbConnect(), "title", "pavogimas", 8);


            echo "<br/>";
            echo "<br/>";
            echo "<br/>";



        function getArticle($conn, $id){
            $query = "SELECT * FROM articles WHERE id = '$id'";

            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);

            if(!$data){
                echo "<h2>Straipsnio nr $id nera</h2>"  . msqli_error($conn);
            }

            echo "Straipsnio id: " . $data['id'] . "</br>" ;
            echo "Pavdinimas: " . $data['title'] . "</br>";
            echo "turinys: " . $data['content'] . "</br>";
            echo "teksta parase: " . $data['user_id'] . "</br>";
        }

        //getArticle(dbConnect(), 3);

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";






        function getArticles($conn){
            $query = "SELECT * FROM articles";

            $results = mysqli_query($conn, $query);

            //echo print_r($results);

            mysqli_num_rows($results);

            //  echo print_r($articles);

           $artInfo = mysqli_fetch_row($results);
           
           

           while ($artInfo){
               echo "str pavad " . $artInfo[1] . "<br/>";
               echo "str turinys " . $artInfo[2] . "<br/>";
               echo "str autoruiaus nr " . $artInfo[4] . "<br/>";


            $artInfo = mysqli_fetch_row($results);
           }
            
        }

        //getArticles(dbConnect());




        function getArticleBy($conn, $searchTerm){
            $query = "SELECT id, title, content FROM articles WHERE title LIKE '%$searchTerm%' OR content LIKE '%$searchTerm%'";

            $results = mysqli_query($conn, $query);

            mysqli_num_rows($results);

            //echo print_r($results);

            $search = mysqli_fetch_row($results);

            while($search) {
                echo "str id: " . $search[0] . "<br/>";
                echo "str pavadinimas: " . $search[1] . "<br/>";
                echo "str content: " . $search[2] . "<br/>";

            $search = mysqli_fetch_row($results);

            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            }


        }


        //getArticleBy(dbConnect(), 'pavadinimas');


?>