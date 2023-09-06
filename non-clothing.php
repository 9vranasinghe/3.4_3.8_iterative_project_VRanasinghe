<!-- This page will hold the fourth query -->
<html>
<head>
    <title>Non-Clothing</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="main">
        <h1>Kool Kiwiana</h1>
        <?php
        // Puts the navigation bar from nav.php into page_1
        require("nav.php");
        ?>
        <?php
        // Connecting to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
        <div id="container">
            <div class="headings1">
                <div><h2>Product</h2></div>
                <div><h2>Category</h2></div>
                <div><h2>Price</h2></div>
            </div>
            
            <?php
            // Creating a variable to store the query 
            $query = "SELECT products.Product_PK, category.Category, price.Price
FROM products
INNER JOIN category ON products.Category_FK = category.Category_PK
INNER JOIN price ON products.Price_FK = price.Price_PK
WHERE category.Category != 'Clothing Item' AND price.Price <= 40
ORDER BY category.Category ASC, price.Price ASC;
";
            
            $result = mysqli_query($conn, $query);
            while ($output = mysqli_fetch_array($result)) {
            ?>
                <!-- Displaying the query in the HTML -->
                <div class="headings2">
                    <div class="left"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['Category']; ?></p></div>
                    <div><p><?php echo $output['Price']; ?></p></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<html>
