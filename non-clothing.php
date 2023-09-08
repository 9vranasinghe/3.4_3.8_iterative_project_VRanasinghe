<html>
	<head>
		<title>Non-Clothing</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/style_all_products.css">
		<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	</head>
	
	<body>
	
		<?php
    		// Puts the navigation bar from nav.php into the non-clothing page
    		require("nav.php");
    	?>
		<?php
       		 // Connecting the non-clothing page to the database
        	require_once("Database_Assessment_mysqli.php");
        ?>
		
		<?php
            // Creates a variable to store the SQL query
            $query = "SELECT products.Product_PK, category.Category, price.Price, products.Image
				FROM products
				INNER JOIN category ON products.Category_FK = category.Category_PK
				INNER JOIN price ON products.Price_FK = price.Price_PK
				WHERE category.Category != 'Clothing Item' AND price.Price <= 40
				ORDER BY category.Category ASC, price.Price ASC;";

            // Runs and stores the query using the variables $con (see nav.php) and $query
            $result = mysqli_query($conn, $query);

            // Runs in a 'while' loop
            while ($output = mysqli_fetch_array($result)) {
        ?>
        <!-- PHP is above. HTML is below. Used to output the query results -->
        <div class="product-box">
            <img src="images/<?php echo $output['Image']; ?>" alt="Products_PK">
            <div class="product-box-details">
				<h3 class="product-name"><?php echo $output['Product_PK']; ?></h3>
                <p class="description"><?php echo $output['Category']; ?></p>
                <p class="product-price">$<?php echo $output['Price']; ?></p>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>
        <?php
            }
            // Closes the output while loop
        ?>
    
		
		<?php
    		// Puts the footer from footer.php into the non-clothing page
    		require("footer.php");
    	?>
		
	</body>
	
</html>
