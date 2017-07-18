<?php
session_start();
 ?>


<!DOCTYPE html>
<html>

<head>
	<title>Steel Beams Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="lib/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		include_once('./scripts-style.php');
	 ?>
</head>

<body>
    <div class="container-fluid secret">
      <div class="row">
        <div class="col-12">
          <div class="services-bar">
              <h2>Services</h2>
              <p>We are proud to present you our qualified services to complete your projects without stress, not consuming much time and with quality that will last for centuries and will be recognized by architects, engineers and building surveyors.</p>
              <h3>Loft conversions (extensions ) and simple structural design</h3>
              <p> We do design from simple alone structural elements like (steel beam, timber beam, flitch beam, Chimney removal elements, column design, joist and rafters design, foundation design and of course joints design) to whole structural designs of loft conversion or extension.
              <h3>SPECIAL PROJECTS</h3>
              <p> New residentials, offices and industrial buildings design or checking of structural calculations. We are happy to help with your project and deliver quality for you. We are working with our partners with more than 30 years of experience in different kinds of construction design.
                Want an offer? Click here…</p>
          </div>
          <div class="about-bar">
              <h2>About</h2>
              <p>WE ARE QUALIFIED</p>
              <p>WE ARE FAST</p>
              <p>WE ARE RESPONSIBLE</p>
              <p>WE ARE FLEXIBLE</p>
              <p> We deliver quality Engineering costs are just 5% of all construction price and saving for a engineer can cost you in the end a lot more. Economically and structurally not reasonably decisions of hurrying Engineers lead to mistakes which not only affects the total costs of construction, but after few years of using  the construction cracks appear in walls, ceilings and other parts of construction
              <p> We are efficient</p>
              <p> We are working as much as possible online. In the 21th century internet and mobile technology give us opportunities to make photos and videos on construction sites and live chats to communicate with our clients. It saves money and time.</p>
              <p>Always on time</p>
              <p>Our goal: never be behind the dead-line.</p>
              <p>We are passionate</p>
              <p> We love engineering and love to sell products that our clients use till the end of their lives(gales vaikams pailkti kokybe veta pinigu). We love to sell our engineering designs that look beautiful and don’t need to be hidden. Newest technologies and software are our tools in every day work, but engineering basics from books  and good practices from the past - are our main concept of quality. </p>
              <p> Yes, We are legal and insured </p>
              <p>We not only give quality but also guaranties to our clients! We are a limited company and we are not scared to show our strenghts. We have insurance! Safety first! (not common for online companies).</p>
          </div>
        </div>

      </div>
    </div>
		<div class="container-fluid padding">
		<div class="row">


			<div class="col-lg-2">
				<div class="row">
					<div class="col-lg-12">
            <?php if (isset($_SESSION['u_id'])) {
                  include_once('./user.php');
            } else {
              echo '<div class="pinter">
  							<a data-pin-do="embedBoard" data-pin-board-width="170" data-pin-scale-height="320" data-pin-scale-width="70" href="https://www.pinterest.de/jonaspupeikis/loft-ideas/"></a>
  						</div>';
            }
              ?>


					</div>

				</div>

				<div class="row">
						<div class="col-lg-12 margin-left">
							<?php
								include_once('./efect.php');
							 ?>
						</div>

				</div>

				</div>
				<div class="col-lg-10">
					<div class="row">
						<div class="col-lg-8">
							<?php
								include_once('./search.php');
							 ?>
						</div>
						<div class="col-xs-12 col-lg-4 side nuoVirsaus">
							<div class="row">
								<div class="col-xs-12 aukstis-logo">
									<img src="lib/logo.png" class="img-fluid logo img-responsive" alt="Logo" height="150" width="340">


								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<?php
										include_once('./menu.php');
									 ?>

								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<?php
										include_once('./login.php');
									 ?>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>

			</div>
<?php
	 include_once('./footer.php');
?>
