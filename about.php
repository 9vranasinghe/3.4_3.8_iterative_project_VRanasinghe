<html>
	<head>
		<title>About</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	</head>
	
	<body>
	
		<?php
    		// Puts the navigation bar from nav.php into the about page
    		require("nav.php");
    	?>
		<?php
       		 // Connecting the about page to the database
        	require_once("Database_Assessment_mysqli.php");
        ?>
		
		<img src="images/mrvintage.jpg" alt="left-image" class="left-image">
		<img src="images/jhd.jpg" alt="right-image" class="right-image">
		
		<div class="about_content-box2">
        
			<h3>About Us</h3>
        	<p>Nicky Roundtree has just moved to London and she wanted this website to be a place for Kiwi designers 
				to showcase themselves. The primary purpose of this website is to record and display the availability of 
				the products which all have Kiwi flair. Nicky started this business with three designers, Mr Vintage, 
				Moana Road, and JHD, and she has hand-picked the best-selling products from each of the designers to be 
				displayed on the website.
			</p>
			
        	<p>If you are also a Kiwi designer looking to showcase your products, then please feel free to use the 
				contact form to contact us.
			</p>
			
    	</div>
		
		<img src="images/about_bottom.jpg" alt="image-bottom" class="bottom-image">
		
		<?php
    		// Puts the footer from footer.php into the about page
    		require("footer.php");
    	?>
	</body>
	
</html>
