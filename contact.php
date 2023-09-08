<html>
	<head>
		<title>Contact Us</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	</head>
	
	<body>
	
		<?php
    		// Puts the navigation bar from nav.php into the contact page
    		require("nav.php");
    	?>
		<?php
       		 // Connecting the contact page to the database
        	require_once("Database_Assessment_mysqli.php");
        ?>
		
		<!-- Form -->
		<div class="contact_container">
			<form action="connect.php" method="post">
			
			<!-- Name Field -->
			
			<div class="row">
				<div class="column">
					<label for="name">Name</label>
				</div>
				<div class="column2">
					<input type="text" id="name" name="name" placeholder="Your full name">
				</div>
			</div>
			
			<!-- Email Field -->

			<div class="row">
				<div class="column">
					<label for="email">Email Adress</label>
				</div>
				<div class="column2">
					<input type="text" id="email" name="email" placeholder="Your email address">
				</div>
			</div>

			<!-- Contact Number Field -->	
			<div class="row">
				<div class="column">
					<label for="phone">Contact Number</label>
				</div>
				<div class="column2">
					<input type="text" id="phone" name="phone" placeholder="A contact number">
				</div>
			</div>
			
			<!-- Subject Field -->
			<div class="row">
				<div class="column">
					<label for="message">Subject</label>
				</div>
				<div class="column2">
					<textarea id="message" name="message" placeholder="Write Something.." style="height:200px"></textarea>
				</div>
			</div>
			
			<!-- Submit Button -->
			
			<div class="row">
				<input type="submit" value="Submit">
			</div>
			
		</form>
		
		<?php
    		// Puts the footer from footer.php into the contact page
    		require("footer.php");
    	?>
			
	</body>
	
</html>
