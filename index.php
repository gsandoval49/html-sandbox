<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8:">
		<!-- this says render this page in latest IE rendering engine because MS sucks lol  better than IE 9 or 10-->
		<meta http-equiv="x-ua-compatible" content="IE-edge">
		<!-- feel free to check others i.e. ddcb website to take meta tags, the ones you need for your project ex. minimized window, not taskbar-->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- OPTIONAL THEME HERE...IF YOU WANT :) -->
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified CSS-->
		<!-- link tag href - path to cdn; sha384 this is new because it's a way to verify a legit url for a link; -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!--ADD YOUR CUSTOM CSS HERE; EX. fontawesome, note: put your own custom css last! -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<!-- on it's way out and will be gone when bootstrap 4 is here. you'll see on older sites with older code, ex. legacy-->
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- add your custom js files here -->
		<script src="js/custom.js" type="text/javascript"></script>


	</head>


	<body class="sfooter">

	<!-- BEGIN HEADER -->
	<!-- it's div within divs; notice the "col-md-12" syntax has to be correct-->
	<!-- the column piece means this ".col-breakpoint-# of columns out of 12" that's what "col-md-12" means -->

	<!--begin sticky footer-->
	<div class="sfooter-content">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- begin navbar -->
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">My Bootstrap Page</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Home</a></li>
								<li><a href="about-me">About Me</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Moar Links <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>


				</div>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					sidepanel
				</div>
				<div class="col-md-9">
					content panel
				</div>
			</div>

			<!-- 2nd row of columns-->
			<div class="row">
				<div class="col-md-3">
					col 1
				</div>
				<div class="col-md-3">
					col 2
				</div>
				<div class="col-md-3">
					col 3
				</div>
			</div>

		</div>
	</main>
	</div>
	<!-- BEGIN FOOTER HERE -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					foot col 1
				</div>
				<div class="row">
					foot col 2
				</div>
			</div>
		</div>

	</footer>

	</body>
</html>