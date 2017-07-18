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

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="read-article.php" class="thumbnail" style="position:relative">
            <img class="image" src="images/pic1.jpg" alt="...">
            <h3 class="text">Lorem ipsum dolor sit amet, consectetur.</h3>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="thumbnail" style="position:relative">
            <img class="image" src="images/pic2.jpg" alt="...">
            <h3 class="text">Lorem ipsum dolor sit amet, consectetur.</h3>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="thumbnail" style="position:relative">
            <img class="image" src="images/pic3.jpg" alt="...">
            <h3 class="text">Lorem ipsum dolor sit amet, consectetur.</h3>
          </a>
        </div>
      </div>
      <div class="row" style="margin-top:50px;">
        <div class="col-md-9">
          <h4 class="blue-title">Travel stories</h4>
          <div class="horizontal-line2">
            <div class="row" style="margin-top:30px;">
              <div class="col-md-6 blog-post-padding">
                <div class="thumbnail thumbnail-content">
                  <a href="#" class="">
                    <div class="caption">
                      <img class="blog-pictures" src="images/pic4.jpg" alt="Guy sits on a mountain edge">
                      <h3>Thumbnail label</h3>
                      <p style="color: #777">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p class="button" style="color: #d9534f">Read more  &gt</p>
                    </div>
                  </a>
                </div>
              </div>


              <div class="col-md-6">
                <ul class="small-thumbnail">
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic1.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="date">Date</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic2.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="date">Date</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic3.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="date">Date</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>



            </div>
          </div>
          <h4 class="blue-title">Free guides</h4>
          <div class="horizontal-line2">
            <div class="row" style="margin-top:30px;">
              <div class="col-md-6 blog-post-padding">
                <div class="thumbnail thumbnail-content">
                  <a href="#" class="">
                    <div class="caption">
                      <img class="blog-pictures" src="images/pic4.jpg" alt="Guy sits on a mountain edge">
                      <h3>Thumbnail label</h3>
                      <p style="color: #777">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p class="button" style="color: #d9534f">Read more  &gt</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <ul class="small-thumbnail">
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic1.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="by-author">By Jhon Doe</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic2.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="by-author">By Jhon Doe</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="thumbnail">
                      <div class="row">
                        <div class="col-md-6">
                            <img src="images/pic3.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="by-author">By Jhon Doe</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <?php include('./aside.html'); ?>

      </div>
    </div>
  </section>

  <?php include('./footer.html'); ?>

  <script src="lib/jquery-3.2.1.min.js" ></script>
  <script src="lib/bootstrap/js/bootstrap.min.js" ></script>
</body>

</html>
