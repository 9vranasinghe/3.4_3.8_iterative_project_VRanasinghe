<!---- HOME PAGE OF THE KOOL KIWIANA WEBSITE ---->
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/style_index.css">
		<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
		<div id="top"></div>
	</head>
	
	<body>
	
		<?php
    		// Puts the navigation bar from nav.php into the index page
    		require("nav.php");
    	?>
		<?php
       		 // Connecting the index page to the database
        	require_once("Database_Assessment_mysqli.php");
        ?>
		
		<div class="slideshow-container">

  <!-- Image slideshow -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/slide1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/slide2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/slide3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots below the slideshow -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
		
		 <script src="js/slideshow.js"></script>
		
		<!---- Content box 1 ---->
		<div id="index_main">
			
			<div id="index_content-box1">
				<h3>WELCOME TO THE KOOL KIWIANA WEBSITE</h3>
				<p>This is the Kool Kiwiana website. We offer a number of different clothing and accessory products that you can browse through and read about. 
				Please feel free to use the contact form to contact us and provide feedback so that we can improve your experience in the future. We hope our 
				products catch your attention.</p>
			</div>
			
		</div>
		
		
		<?php
    		// Puts the footer from footer.php into the index page
    		require("footer.php");
    	?>
		
	</body>
</html>
