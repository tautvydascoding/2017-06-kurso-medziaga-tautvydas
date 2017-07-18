<!DOCTYPE html>
<html>

<head>
    <title>Blogas: Urban Wedding</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Andada|Raleway:400" rel="stylesheet">
    
    
    
    <!--favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    

    <!--stylesheets-->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="blog-bg">

    <div class="container-fluid">
        <!--logo absolute-->
        <div class="row top-row">

            <a href="index.php"><img class="uw-logo img-responsive" src="asset/uw-logo.png" alt="urban wedding logo" /></a>

            <!--left side of screen-->
            <div class="col-md-6 col-xs-12 left-side">
                <div class="heading">
                    <h1 class="heading-text text-center">Blogas</h1>
                </div>
            </div>
            <!--right side of screen-->
            <div class="col-md-6 col-xs-12 right-side">
                <!--navigation-->

                
                <?php include 'menu-icon.html';?>


                <?php include 'nav.html';?>
                

                <?php include_once 'blogpages.php';?>





                <div class="wrapper">


                    <div class="post-content">
                        <h2 class="small-heading text-center">
                            <?php echo $title;  ?>
                        </h2>


                        <p class="blog-text blog-article">
                            <?php  echo nl2br($content);  ?>
                        </p>



                        <div class="blog-footer">

                            <h6 class=" article-date simple-text">
                                <?php echo date("Y/m/d", strtotime($date));    ?>
                            </h6>


                            <h5 class=" article-author simple-text">
                                <?php  echo $author;   ?>
                            </h5>

                        </div>



                        <div class="page-controls text-center blog-text row">
                            <?php  echo $paginationCtrls   ?>
                        </div>

                    </div>




                </div>





            </div>

        </div>

    </div>

    <script src="lib/jQuery/jquery-3.2.1.min.js"></script>
    <script src="js/transition.js"></script>





</body>

</html>
