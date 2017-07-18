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
          <div class="article">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
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
