<?php

// skripta za prosljedivanje podataka iz forme na dojmovnik.html

// spremanje vrijednosti u php varijable
$ime = $_POST['firstname'];
$prezime = $_POST['lastname'];
$email = $_POST['email'];
$zemlja = $_POST['country'];
$dojmovi = $_POST['thoughts'];
$obavijesti = $_POST['notifyme'];

?>
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Coffe Bar Piccolo">
        <meta name="keywords" content="Coffe Bar, Coffe, Vine, Beer, Good Time">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Twitter">
		
        <meta name="author" content="marija.mar991@gmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="favicon/glass.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="glass.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Piccolo - Main Page</title>
	</head>
<body>
	<header>
		<div class="hero-image"></div>
		<nav>
			<div class="container">
				<ul>
				  <li><a href="index.php">Home</a></li>
				  <li><a href="news.php">News</a></li>
				  <li><a href="contact.php">Contact</a></li>
				  <li><a href="about-us.php">About</a></li>
				  <li><a href="gallery.php">Gallery</a></li>
				  <li><a href="dojmovnik.php">Dojmovnik</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		<div class="container">
			<br>
			<br>
			<br>
			<br>
			<p>Ime: <?php  echo $ime ?></p>
			<p>Prezime: <?php  echo $prezime ?></p>
			<p>Email: <?php  echo $email ?></p>
			<p>Zemlja: <?php  echo $zemlja ?></p>
			<p>Vaš Dojam: <?php  echo $dojmovi ?></p>
			<p>Obavijesti: <?php  echo $obavijesti ?></p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2019 Marija Marković.</p>
	</footer>
</body>
</html>