<!-- localhost/2018_12cs_practice/index.php -->
<html>
<head>
    <title>All Products</title>
    <link rel="stylesheet" type="text/css" href="css/style_products.css">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
	<div id="logo">
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
	
        <br><br>
        <?php
        // Get the connection to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
           <?php
            // Creates a variable to store the SQL query
            $query = "SELECT products.Product_PK, products.Image, price.Price, description.Decription
FROM products
INNER JOIN price ON products.Price_FK = price.Price_PK
INNER JOIN description ON products.Description_FK = description.Description_PK
ORDER BY price.Price ASC";

            // Runs and stores the query using the variables $con (see nav.php) and $query
            $result = mysqli_query($conn, $query);

            // Runs in a 'while' loop
            while ($output = mysqli_fetch_array($result)) {
                ?>
                <!-- PHP is above. HTML is below. Used to output the query results -->
                <div class="content">
                    <div class="name"><p><?php echo $output['Product_PK']; ?></p></div>
					<br>
                    <div><p><?php echo $output['Decription']; ?></p></div>
                    <div><p2>$<?php echo $output['Price']; ?></p2></div>
                    <?php
                    // Get the correct path to the image based on the 'Image' value in the database
                    $imagePath = "images/" . $output['Image'];
                    ?>
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo $output['Product_PK']; ?>" width="200" height="200">
                </div>
                <?php
            }
            // Closes the output while loop
            ?>

        </div>
    </div>
</body>
</html>
