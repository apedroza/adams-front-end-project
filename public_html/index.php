<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/style.css">

		<!-- jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
		<title>Adam's Front End Project</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-container">
			<header>
				<nav class="navbar navbar-default yellow-background">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header yellow-background">
							<button type="button" class="navbar-toggle collapsed yellow-background" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Ice Cold Marketing<i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse yellow-background" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right yellow-background">
								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>


			</header>

			<div>
				<div class="container spaceDn">
				<div class="col-xs-10 col-xs-offset-1">
					<div id="fontShift" class="jumbotron" onclick="fontShift();">
						<h1>HELLO!! ADAM'S FIRST BOOTSTRAP</h1>
					</div>
				</div>
				<div class="container">
					<!--row 1-->
					<div class="row">
						<div class="col-xs-12">
						</div>
					</div>
				</div>

					<!-- row 2-->
					<div class="row spaceUp yellow-background">
						<div class="col-sm-2 col-md-offset-2 yellow-background">
							<img src="images/lenny.jpg" alt="lenny">
						</div>
						<div class="col-md-6 col-md-offset-2 yellow-background">
							<p id="1" onClick="colorShift();">While Of Mice and Men occurs in a very specific time and place, each of the
							characters can be thought of as symbolizing broader populations. Though the book
							is not an allegory, and each character can stand alone as simply a character,
							there’s still something to be gained by looking at each character as representative
							of their larger group. Here we go.</p>
						</div>
					</div>
				</div>

					<!--row 3-->
				<div class="spaceDn"></div>
					<div class="row fontShift">
						<div class="col-sm-2 col-md-2 col-sm-offset-2">
							<div class="thumbnail">
								<img class="img-circle" src="images/city.jpg" alt="city">
								<div class="Sacramento">
									<h3>Downtown</h3>
									<p id="7" onmouseover="cityText()">Come to downtown Sacramento! Not really.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="thumbnail">
								<img class="img-circle" src="images/tacos.jpg" alt="tacos">
								<div class="Tacos">
									<h3>Tacos</h3>
									<p id="changeText" onclick="tacoShift()">Mmmm. Best Tacos.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="thumbnail">
								<img class="img-circle" src="images/tyson.jpg" alt="tyson">
								<div class="Mike Tyson">
									<h3>Mike Tyson</h3>
									<p class="tyson">I Love Pigeons!!</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="thumbnail">
								<img class="img-circle" src="images/startrek.jpg" alt="trek">
								<div class="Star Trek Ship">
									<h3>Star Trek</h3>
									<p>Trek Ship. WOW!!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>

		<footer>
			<div class="spaceUp"</div>
			<div class="container yellow-background">
					<div class="row text-center yellow-background">
						<div class="col-md-12 yellow-background">
							&copy; 2017 Roza Productions
						</div>
					</div>
			</div>
		</footer>
	</body>
</html>