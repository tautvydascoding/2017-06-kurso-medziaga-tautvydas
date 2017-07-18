<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title>Ruta Travels</title>
  </head>

  <body>

  <?php include('./nav.html'); ?>

    <div class="container">
      <div class="col-md-5">
        <div class="form-area">
          <form action="contact-sends.php" method="get">
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
              <!-- <input type="text" class="form-control" id="message" name="message" placeholder="message" required> -->
          </div>
            <input type="submit" value="Send" class="btn btn-large" />
          </form>
        </div>
      </div>
      <div class="col-md-4">
      </div>
      <?php include('./aside.html'); ?>

    </div>


  <?php include('./footer.html'); ?>

  <script src="lib/jquery-3.2.1.min.js" ></script>
  <script src="lib/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
