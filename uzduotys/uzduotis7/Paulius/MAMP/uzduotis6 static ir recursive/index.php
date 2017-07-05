<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s</title>
</head>

<body>
    <h1>Darbas su stactic</h1>
    <?php
     echo "<h1>Darbas su stactic</h1>";
    $b = 0;
    function count2(){
        global $b; ///paima uz funkcijos esancia reiksme
        static $a=0;
        echo "a: $a <br>";
        echo "b: $b <br>";
        $a++;
    }
    count2();
    count2();
    count2();
    count2();
    count2();
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
