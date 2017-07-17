
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <h1>JUNGIAMES PRIE SQL su PHP</h1>

   




</body>
    
     <?php
    

    echo "
    <h3>JUNGIAMES PRIE SQL su PHP</h3>";
    
    define("SERVERNAME", "localhost");
    define("USERNAME", "root"); /// tikras arba rooot
    define("PASSWORD", "root"); /// tikras arba root
    define("DB_NAME", "testuoju");

    /////jungtis prie DB. naudojamas 
    $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB_NAME);
        if ($connection) {
            echo "prisijungti pavyko";
        } else {
            echo "prisijungti nepavyko" . mysqli_connect_error() . "<br>";
        }
    
    
?>
    
    
</html>








    
