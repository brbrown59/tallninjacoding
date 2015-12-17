
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--bootstrap's css-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
				integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
				crossorigin="anonymous"/>
		<!--optional-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
				integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"
				crossorigin="anonymous"/>
		<!--My CSS-->
		<link rel="stylesheet" href="css/styles.css" type="text/css"/>
		<!--IE8 crosscompatibility-->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--jQuery-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!--bootstrap's JavaScript-->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>
		<title>tallninjacoding</title>
	</head>
	<body>
		<header class="content-header">
			<nav class="nav navbar">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">tallninjacoding</a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar"
							  aria-expanded="false">
						<span class="sr-only">Main Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
				</div>
				​
				​
				<div class="collapse navbar-collapse navbar-right" id="my-navbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="menu-item">Home</a></li>
						<li><a href="about-me.php" class="menu-item">About Me</a></li>
						<li><a href="about-me.php#contact" class="menu-item">Contact</a></li>
				</div>
				</ul>
			</nav>
		</header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Bradley Brown</h1>
				</div>
			</div>
			<!--image goes here, only on desktop screens-->
			<div class="row">
				<div class="col-md-12 visible-md-block visible-lg-block home-picture">
					<img src="img/coding_banner.png" class="img-responsive center-block"
						  alt="Code on a laptop"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Full stack web development</h3>
					<h4>Mobile friendly website design with secure, robust backend development</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<a class="btn btn-default btn-lg btn-block" href="about-me.php" role="button">About Me</a>
				</div>
				<div class="col-md-5">
					<a class="btn btn-default btn-lg btn-block" href="#" role="button">Portfolio</a>
				</div>
			</div>
		</div>
	</body>
</html>