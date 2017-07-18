<!DOCTYPE html>
<html>
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
      <div class="row">
        <div class="col-md-6">
          <h3><?php echo $article['title']; ?></h3>
          <p><?php echo $article['content']; ?></p>
          <div class="well">
            <h4>Leave a Comment:</h4>
            <form action="save-comment.php" method="GET">
              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fa fa-reply"></i> Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <?php include('./footer.html'); ?>

    <script src="lib/jquery-3.2.1.min.js" ></script>
    <script src="lib/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
