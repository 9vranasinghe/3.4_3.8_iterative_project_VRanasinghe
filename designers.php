<!-- This page will hold the first query -->
<html>
<head>
    <title>Designers</title>
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
                <div><h2>Designer</h2></div>
                <div><h2>Price</h2></div>
            </div>
            
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
                <div class="headings2">
                    <div class="left"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['designer']; ?></p></div>
                    <div><p><?php echo $output['price']; ?></p></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<html>
