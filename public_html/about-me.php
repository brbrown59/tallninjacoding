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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index.php" class="menu-item">Home</a></li>
								<li><a href="about-me.php" class="menu-item">About Me</a></li>
								<li><a href="#contact" class="menu-item">Contact</a></li>
						</div>
					</ul>
					<!--standard navbar for desktop-->
					<ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
						<li><a href="index.php" class="menu-item">Home</a></li>
						<li><a href="about-me.php" class="menu-item">About Me</a></li>
						<li><a href="#contact" class="menu-item">Contact</a></li>
						<!--portfolio will go here-->
					</ul>
				</div>
			</nav>
		</header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">About Me</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img src="img/headshot.jpg" class="img-responsive center-block" alt="filler picture"/>
				</div>
				<div class="col-md-8">
					<h2 class="text-center">Relevant Skills</h2>
					<ul>
						<li>php</li>
						<li>Javascript</li>
						<li>angular.js</li>
						<li>mySQL</li>
						<li>CSS</li>
						<li>HTML5</li>
						<li>Bootstrap</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>In-depth stuff about me (CS degree, bootcamp, rough summary of my abilities, etc)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 id="contact">Contact</h2>
				</div>
			</div>
			<form>
				<div class="form-group">
					<label for="emailform">Email address</label>
					<input type="email" class="form-control" id="emailform" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="messagefield">Message</label>
					<textarea class="form-control" id="messagefield" rows="3" placeholder="Message"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>