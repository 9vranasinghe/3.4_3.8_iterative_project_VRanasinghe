<!-- This page will hold the third query -->
<html>
<head>
    <title>Clothing</title>
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
                <div><h2>Gender</h2></div>
                <div><h2>Price</h2></div>
            </div>
            
            <?php
            // Creating a variable to store the query 
            $query = "SELECT products.Product_PK, gender.Gender, price.Price
FROM products
INNER JOIN gender ON products.Gender_FK = gender.Gender_PK
INNER JOIN price ON products.Price_FK = price.Price_PK
WHERE products.Category_FK = 1
ORDER BY gender.Gender ASC, price.Price ASC;
";
            
            $result = mysqli_query($conn, $query);
            while ($output = mysqli_fetch_array($result)) {
            ?>
                <!-- Displaying the query in the HTML -->
                <div class="headings2">
                    <div class="left"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['Gender']; ?></p></div>
                    <div><p><?php echo $output['Price']; ?></p></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<html>
