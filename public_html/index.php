<!--things to fix:
a. can't get any navbar-rights to appear at extra small sizes
b. button color locked as-is (not end of world; looks ok)
c. buttons jammed together in phone view
d. general spacing issues?
e. content
f. get a better picture of me
g. make forms smaller?
h. footer?

minor: hover-over of menu still blue-->

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
			<nav class="navbar">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">tallninjacoding</a>
				</div> <!--maybe rest of navbar should be within this div?-->
				<div class="collapse navbar-collapse"> <!--collapse might be the reason for the disappearing navs?-->
					<!--hamburger dropdown for phones-->
					<ul class="nav navbar-nav navbar-right hidden-md hidden-lg">
						<div class="dropdown">
							<!--hamburger not showing up on xs for some reason, possibly change-->
							<!--NO navbars show up on xs-->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index.php" class="menu-item">Home</a></li>
								<li><a href="about-me.php" class="menu-item">About Me</a></li>
								<li><a href="about-me.php#contact" class="menu-item">Contact</a></li>
						</div>
					</ul>
					<!--standard navbar for desktop-->
					<ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
						<li><a href="index.php" class="menu-item">Home</a></li>
						<li><a href="about-me.php" class="menu-item">About Me</a></li>
						<li><a href="about-me.php#contact" class="menu-item">Contact</a></li>
						<!--portfolio will go here-->
					</ul>
				</div>
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
				<div class="col-md-12 visible-md-block visible-lg-block">
					<img src="http://placekitten.com/g/1200/300" class="img-responsive center-block" alt="Temporary picture of a cat, meow"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Full stack web development; responsive, mobile-first designs with something something backend</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<a class="btn btn-default btn-lg center-block btn-block" href="about-me.php" role="button">About Me</a>
				</div>
				<div class="col-md-5">
					<a class="btn btn-default btn-lg center-block btn-block" href="#" role="button">Portfolio</a>
				</div>
			</div>
		</div>
	</body>
</html>