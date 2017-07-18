<!DOCTYPE html>
<html>

<head>
    <title>Galerija</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Andada|Raleway:400" rel="stylesheet">
    
     <!--favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    
    

    <!--stylesheets-->
    
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="gallery-bg">

    <div class="container-fluid">
        <!--logo absolute-->
        <div class="row top-row">

            <a href="index.php"><img class="uw-logo img-responsive" src="asset/uw-logo.png" alt="urban wedding logo" /></a>

            <!--left side of screen-->
            <div class="col-md-6 col-xs-12 left-side">
                <div class="heading">
                    <h1 class="heading-text text-center">Galerija</h1>
                </div>
            </div>
            <!--right side of screen-->
            <div class="col-md-6 col-xs-12 right-side">
                <!--navigation-->
                
                
                
                <?php   include 'menu-icon.html';   ?>



                <?php include 'nav.html';?>




                <div class="wrapper">


                    <div id="myCarousel" class="carousel slide gallery" data-ride="carousel">
                        <!-- Indicators -->
<!--
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
-->

                        <!-- Wrapper for slides -->
                        
                        
                        <div class="carousel-inner">
                            <div class="item active picture-parent">
                                <img class="sliding-picture" src="img/koreguota7.jpg" alt="UW taures ant stalo"/>
                                
                            </div>

                            <div class="item picture-parent">
                                <img class="sliding-picture img-responsive" src="img/koreguotas1.jpg" alt="DAR tauriu ant stalo"/>
                                
                            </div>

                            <div class="item picture-parent">
                                <img class="sliding-picture img-responsive" src="img/koreguotas2.jpg" alt="Aptarnaujantis personalas"/>
                                
                            </div>
                            
                            <div class="item picture-parent">
                                <img class="sliding-picture img-responsive" src="img/koreguotas3.jpg" alt="pyragėliai"/>
                               
                            </div>
                            
                            <div class="item picture-parent">
                                <img class="sliding-picture img-responsive" src="img/koreguotas4.jpg" alt="vanduo"/>
                            </div>
                            
                            <div class="item picture-parent">
                                <img class="sliding-picture img-responsive" src="img/koreguotas6.jpg" alt="vaises">
                            </div>
                            
                            
                        </div>
                            
                        
                        
                        
                        
                        

                        <!-- Left and right controls -->
                        <a class="left carousel-control control-button" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control control-button" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>



                </div>





            </div>

        </div>

    </div>

    
    <script src="lib/jQuery/jquery-3.2.1.min.js"></script>
    <script src="js/transition.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    

</body>

</html>
