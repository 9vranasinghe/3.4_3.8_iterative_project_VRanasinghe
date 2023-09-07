<!-- This page will hold the third query -->
<html>
<head>
    <title>Clothing</title>
	<link rel="stylesheet" type="text/css" href="css/style_clothing.css">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <div id="main">
        
        <?php
        // Connecting to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
        <div id="container">
            
            <?php
            // Creating a variable to store the query 
            $query = "SELECT products.Product_PK, gender.Gender, price.Price, products.Image
FROM products
INNER JOIN gender ON products.Gender_FK = gender.Gender_PK
INNER JOIN price ON products.Price_FK = price.Price_PK
WHERE products.Category_FK = 1
ORDER BY gender.Gender ASC, price.Price ASC;";
            
            $result = mysqli_query($conn, $query);
            while ($output = mysqli_fetch_array($result)) {
            ?>
                <!-- Displaying the query in the HTML -->
                <div class="content">
                    <div class="name"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['Gender']; ?></p></div>
                    <div><p2>$<?php echo $output['Price']; ?></p2></div>
					<?php
                    // Get the correct path to the image based on the 'Image' value in the database
                    $imagePath = "images/" . $output['Image'];
                    ?>
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo $output['Product_PK']; ?>" width="200" height="200">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<html>
