<!DOCTYPE html>
<html>

<head>
    <title>Mokysimes php include</title>
</head>

<body>





    <?php 
  
        include_once("./header.php");

    ?>






    <section>
       
       <?php

        for($i=0; $i < 6; $i++){
            include("./article.html");
        }

       ?>

        
    </section>







  <?php

    include_once("./footer.php");

  ?>






</body>



</html>