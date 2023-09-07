<!-- This page will hold the first query -->
<html>
<head>
    <title>Designers</title>
	<link rel="stylesheet" type="text/css" href="css/style_designers.css">
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
	<?php
        // Puts the navigation bar from nav.php into the index page
        require("nav.php");
        ?>
    <div id="main">
		
        <?php
        // Connecting to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
        <div id="container">

            <?php
            // Creating a variable to store the query 
            $query = "SELECT products.Product_PK, designer.designer, price.price
FROM products
INNER JOIN designer ON products.Designer_FK = designer.Designer_PK
INNER JOIN price ON products.Price_FK = price.Price_PK
ORDER BY designer.designer DESC, price.price DESC;
";
            
            $result = mysqli_query($conn, $query);
            while ($output = mysqli_fetch_array($result)) {
            ?>
                <!-- Displaying the query in the HTML -->
                <div class="content">
                    <div class="name"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['designer']; ?></p></div>
                    <div><p2>$<?php echo $output['price']; ?></p2></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<html>
