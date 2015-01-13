<!DOCTYPE html>
<html>
	<head>
		<title>Hedgerow Garlands</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="img/icon-black.ico" >
	</head>
	<body>
		<img src="img/logo.png" id="logo">
		<div class="divider"></div>
		<ul id="nav">
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="index.php">PHOTOS</a></li>
			<li><a href="price.php">PRICING</a></li>
			<li><a class="active" href="contact.php">CONTACT</a></li>
		</ul>
		<div class="divider"></div>
		<br><h2 class="invisible">CONTACT ME</h2>
		<!-- <div class="page-header">CONTACT ME</div><br> -->
		<!-- <div class="divider"></div> -->
		<div id="contact">
			<form action="mail.php" method="post">
				<input type="text" name="name" placeholder="Name"/><br><br>
				<input type="text" name="email" placeholder="Your Email"/><br><br>
				<input type="text" name="subject" placeholder="Subject"/><br><br>
				<textarea name="message" placeholder="Message" rows="8"></textarea><br><br>
				<input type="submit" value="Send Message" />
			</form>
		</div>
		<div class="divider"></div>
	</body>
	<footer>
		<a href="https://www.facebook.com/pages/Hedgerow-garlands/399631883539555" target="_blank"><img src="img/facebook.ico" id="facebook"></a>
	</footer>
</html>