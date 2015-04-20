<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Tantium</title>

		<!-- CSS  -->
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="init.js"></script>
		<link href="logo.png" rel="shortcut icon"/>
	</head>

	<body>
		<header>
			<nav class="green lighten-1" role="navigation">
				<div class="container">
					<div class="nav-wrapper"><a id="logo-container" href="#!" class="brand-logo">Tantium</a>
						<ul class="right hide-on-med-and-down">
							<li><a href="http://tantium.org">Home</a></li>
						</ul>

						<ul id="nav-mobile" class="side-nav">
							<li><a href="http://tantium.org">Home</a></li>
						</ul>
						<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					</div>
			</div>
			</nav>
		</header>

		<main>
			<div class="section no-pad-bot" id="index-banner">
				<div class="container">
					<h1 class="header center green-text">Generator</h1>
					<div class="row center">
						<h5 class="header col s12 light">Here is where you get your custom generated, personal, secure password. It is highly recommended to use 3+ words and 2+ numbers in your password.</h5>
					</div>
				</div>
			</div>

			<br>

			<div class="container">
				<div class="section">
					<div class="row">
						<form class="col s12" id="form">
							<div class="row">
								<div class="input-field col s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Input what you want to be included in your password. Seperate with spaces.">
									<textarea name="input" class="materialize-textarea"></textarea>
									<label>Inputs</label>
								</div>
							</div>
							
							<button class="btn waves-effect waves-light green" type="submit" name="action">Submit
								<i class="mdi-content-send right"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="container green-text center-align">
				<h5>Your password is:</h5>
				<p id="response"></p>
				<a href="#modal" class="modal-trigger">How do I memorize this?</a>
			</div>
			<div id="modal" class="modal">
				<div class="modal-content">
					<h4>Memorization Guide</h4>
					<h6 class="header light">Tantium gives you a mixed version of your inputs after they have been modified.</h6>
					<h5>Words</h5>
					<ol>
						<li>Vowels are randomly removed and letters are made uppercase</li>
						<li>In addition, random letters are replaced with numbers (e->3, l->1, o->0)</li>
						<li>Example: tantium -> tNTim</li>
					</ol>
					<h5>Numbers</h5>
					<ol>
						<li>Numbers are randomly changed with their corresponding symbol</li>
						<li>To find the symbol, apply the SHIFT key to the number (1->!, 2->@, 3->#, etc)</li>
						<li>Example: 123456 -> !2#45^</li>
					</ol>
					<h5>Misc.</h5>
					<ol>
						<li>Random delimiters are added between the parts of your password (not always)</li>
						<li>A random character is chosen to end your password (not always)</li>
					</ol>
				</div>
				<div class="modal-footer">
					<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Got it!</a>
				</div>
			</div>
			<br>
		</main>

		<footer class="page-footer green">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Tantium</h5>
						<p class="grey-text text-lighten-4">Tantium was founded by a team of five ambitious high school students to give users a secure and memorable password.</p>


					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Home Page</h5>
						<ul>
						<li><a class="white-text" href="http://tantium.org#">Home</a></li>
						<li><a class="white-text" href="http://tantium.org#generator">Generator</a></li>
						<li><a class="white-text" href="http://tantium.org#tips">Tips and Tricks</a></li>
						<li><a class="white-text" href="http://tantium.org#howtouse">How to use Tantium</a></li>
						<li><a class="white-text" href="http://tantium.org#aboutus">About Us</a></li>
						<li><a class="white-text" href="#contact">Contact Us</a></li>
						</ul>
					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Connect</h5>
						<ul>
							<li><a class="white-text" href="#">Home Page</a></li>
							<li><a class="white-text" href="mailto:tantium@tantium.org">Email</a></li>
							<li><a class="white-text" href="https://www.facebook.com/tantiumorg">FaceBook Page</a></li>
							<li><a class="white-text" href="https://twitter.com/tantium">Twitter</a></li>
							<li><a class="white-text" href="#!">Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					&copy; Tantium 2015 | Made with <a class="grey-text text-lighten-2" href="http://materializecss.com/">MaterializeCSS</a>
					<a class="grey-text text-lighten-2 right" href="/license">MIT License</a>
				</div>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="response.js"></script>
	</body>

</html>
