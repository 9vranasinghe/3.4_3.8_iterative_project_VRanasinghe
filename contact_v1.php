<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/style_contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
	<div id="banner">
		<h1>Kool Kiwiana</h1>
    </div>
	<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown">Products</a>
                <div class="dropdown-content">
                    <a href="products.php">All Products</a>
                    <a href="designers.php">Designers</a>
                    <a href="clothing.php">Clothing</a>
					<a href="non-clothing.php">Non-Clothing</a>
                </div>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
	<br><br><br>
	<div id = "main">
		<br>
		<?php
		//Get the connection to the database in phpMyAdmin
		require_once("13dit_phpForm_mysqli.php");
		?>
<br>
		
		
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
					<textarea id="message" name="message" placeholder="Your Message..." style="height:200px"></textarea>
				</div>
			</div>
			
			<!-- Submit Button -->
			
			<div class="row">
				<input type="submit" value="Submit">
			</div>
			
		</form>
	
	</div>
	</body>
	
</html>