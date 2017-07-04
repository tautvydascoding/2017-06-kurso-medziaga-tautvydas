<!DOCTYPE html>
<html>
<!--LAIKOMES TVARKOS COLUMN IR CONTAINER-->

<head>
    <meta charset="utf-8" />
    <title>Mokinames PHP</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- musu css failas turi buti paskutinis - jis bus lemiamas ir naudojamas galu gale-->
</head>



<body>

<div class="container">
    <div class="row">

        <?php>
    
        include_once("./header.php"); 
        
        ?>

<section>
    <div class="col-md-12 green aukstis600">
<!--        ikelia kelis kartus--------------->
      <?php
        
        for($i = 0; $i < 6; $i++) {
            include("article.php");
        }      
        

        ?>
<!--ikelia kelis kartus---------------------->
    </div>

</section>

<footer class="text-center">

    This is my footer!!!

</footer>




        </div>
    </div>


</body>

</html>
