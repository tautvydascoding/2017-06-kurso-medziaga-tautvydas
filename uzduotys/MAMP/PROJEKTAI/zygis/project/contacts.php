<!DOCTYPE html>
<html>

<head>
    <title>Kontaktai</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Andada|Raleway:400" rel="stylesheet">
    
    
     <!--favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    

    <!--stylesheets-->
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="contacts-bg">

    <div class="container-fluid">
        <!--logo absolute-->
        <div class="row top-row">

            <a href="index.php"><img class="uw-logo img-responsive" src="asset/uw-logo.png" alt="urban wedding logo" /></a>

            <!--left side of screen-->

            <div class="col-md-6 col-xs-12 left-side">

                <h1 class="heading-text text-center">Kontaktai</h1>

            </div>


            <!--right side of screen-->
            <div class="col-md-6 col-xs-12 right-side">
                <!--navigation-->
                
                
                <?php   include 'menu-icon.html';   ?>


                <?php   include 'nav.html';  ?>





                    <div class="wrapper">

                        <h2 class="text-center small-heading">Turite klausimų ar pasiūlymų? Parašykite mums!</h2>

                        <form id="send-message" action="sendemail.php" method="get">
                            <div class="row eile">
                                <div class="col-md-6">
                                    <label class="simple-text">Jūsų vardas:</label><br/>
                                    <input id="name-field" class="small-field" type="text" name="name"/><br/>
                                </div>
                                <div class="col-md-6">
                                    <label class="simple-text">El. paštas:</label><br/>
                                    <input id="email-field" class="small-field" minlength="" type="email" name="email" /><br/>
                                </div>
                            </div>
                            <div class="row eile">
                                <div class="col-md-12">
                                    <label class="simple-text">Jūsų žinutė:</label><br/>
                                    <textarea class="message-field" type="text" name="message"></textarea><br/>
                                </div>
                            </div>
                            <button class="send-button simple-text" type="submit">Siųsti</button>
                        </form>

                        <div class="row eile">
                            
                            
                            <?php include"./getcontact.php" ?>
                            
                            
                            <div class="col-md-4 contact">

                                <a href="<?php echo getContact(3);   ?>" target="_blank"><i class="fa fa-facebook-official contact-logo" aria-hidden="true"></i></a>
                                <p class="simple-text">Aplankykite mus Facebook'e</p>

                            </div>
                            <div class="col-md-4 contact">

                                <i class="fa fa-phone-square contact-logo" aria-hidden="true"></i>
                                <p class="simple-text">Paskambinkite: <?php echo getContact(1);  ?></p>

                            </div>
                            
                              <div class="col-md-4 contact">

                                <i class="fa fa-envelope contact-logo" aria-hidden="true"></i>
                                <p class="simple-text">Lauksime laiškų: <?php echo getContact(2);   ?></p>

                            </div>


                        </div>

                    </div>







            </div>

        </div>

    </div>


    <!----Script files---->

    <script src="lib/jQuery/jquery-3.2.1.min.js"></script>
    <script src="lib/validate/jquery.validate.min.js"></script>
    <script src="js/form-validate.js"></script>
    <script src="js/transition.js"></script>
    
    
    
    
    
    
    
    

</body>

</html>
