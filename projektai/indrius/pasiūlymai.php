<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" />
    <title>Impex</title>
  </head>
  <body class="komanda">
      <?php include 'meniu2.php'; ?>

    </div>
    <div class="wrapper">
       <div id="contact_form">
       <form name="form1" id="ff" method="post" action="mail.php">
       <h1>Jūsų Pasiūlymai</h1>

           <label>
           <span> Vardas:</span>
           <input type="text" placeholder="Jusu vardas" name="name" id="name" required autofocus>
         </label><br><br>

           <label>
           <span>Miestas: </span>
           <input type="text" placeholder="Jusu miestas" name="city" id="city" required>
         </label><br><br>

           <label>
           <span>Tel. nr:</span>
           <input type="tel" placeholder="Jusu telefonas" name="phone" id="phone">
         </label><br><br>

           <label>
           <span>E-paštas*:</span>
           <input type="email" placeholder="Jusu el pastas" name="email" id="email" required>
         </label><br><br>

           <input class="sendButton" type="submit" name="Submit" value="Send">

       </form>
       </div>

      </div>

  </body>
</html>
