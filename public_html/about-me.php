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
				<div class="col-md-12 text-center">
					<h1>About Me</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src=" img/headshot.jpg" class="img-responsive img-circle center-block" alt="my picture"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Relevant Skills</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-3">
					<ul>
						<li>php</li>
						<li>Javascript</li>
						<li>angular.js</li>
						<li>mySQL</li>
						<li>CSS</li>
					</ul>
				</div>
				<div class="col-md-3 col-md-offset-2">
					<ul>
						<li>HTML5</li>
						<li>Bootstrap</li>
						<li>Java</li>
						<li>C</li>
						<li>C++</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center description">
				<h2>Education</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>Deep Dive Coding Bootcamp, CNM Stemulus Center - Graduated December 2015</h4>
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>New Mexico Institute of Mining and Technology</h4>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 id="contact">Contact</h2>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<form action="about-me.php" method="post">
				<div class="form-group">
					<label for="emailform">Email address</label>
					<input type="email" name="email" class="form-control" id="emailform" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="messagefield">Message</label>
						<textarea class="form-control" id="messagefield" name="content" rows="3"
									 placeholder="Message"></textarea>
				</div>
				<button type="submit" name="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>

<?php
/**
 * sends contents of a simple html form via swiftmailer
 *
 * Bradley Brown <tall.white.ninja@gmail.com>
 */

require_once(dirname(__DIR__) . "/vendor/autoload.php");

if(empty($_POST["email"]) === false && empty($_POST["content"]) === false) {
	try {

		//compose and send the email
		//create swift message
		$swiftMessage = Swift_Message::newInstance();

		$swiftMessage->setFrom([$_POST["email"] => "Inquiry"]);

		$recipients = ["tall.white.ninja@gmail.com"];
		$swiftMessage->setTo($recipients);

		//attach subject line
		$swiftMessage->setSubject("Note from personal website");

		//attach the actual message
		$message = trim($_POST["content"]);
		$message = filter_var($message, FILTER_SANITIZE_STRING);
		$swiftMessage->setBody($message, "text/plain");

		//send email via smtp
		$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
		$mailer = Swift_Mailer::newInstance($smtp);
		$numSent = $mailer->send($swiftMessage, $failedRecipients);

		//throw an exception if the number of people who
		if($numSent !== count($recipients)) {
			// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
			throw(new RuntimeException("unable to send email"));
		}

// report a successful send
		echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";


	} catch(Exception $exception) {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oops!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
	}

	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
}