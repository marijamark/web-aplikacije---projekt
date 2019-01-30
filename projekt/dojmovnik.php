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
		<title>Piccolo - Dojmovnik Page</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 200px;"></div>
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
			<h1>Dojmovnik</h1>
			<div id="contact">
				<form action="skripta_dojmovnik.php" method="POST" id="dojmovnik" name="dojmovnik">
					<label for="fname">First Name *</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					<label for="lname">Last Name *</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

					<label for="lname">Your E-mail *</label>
					<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

					<label for="country">Country</label>
					<select id="country" name="country">
					  <option value="">Please select</option>
					  <option value="BE">Belgium</option>
					  <option value="HR">Croatia</option>
					  <option value="FRA">France</option>
					  <option value="GER">Gremany</option>
					  <option value="IT">Italy</option>
					  <option value="LU">Luxembourg</option>
					  <option value="SLO">Slovenia</option>
					  <option value="S">Spain</option>
					</select>

					<label for="thoughts">Your thoughts about us</label>
					<textarea id="thoughts" name="thoughts" placeholder="Write something.." style="height:200px"></textarea>

					<label for="notifyme">Do you want to recieve latest news? *</label>
					<input type="radio" name="notifyme" value="Da" required> Yes<br>
  					<input type="radio" name="notifyme" value="Ne" required> No<br>

					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2019 Marija Marković.</p>
	</footer>
</body>
</html>
