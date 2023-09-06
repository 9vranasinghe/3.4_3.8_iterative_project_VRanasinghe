<!-- localhost/2018_12cs_practice/index.php -->
<html>
<head>
    <title>Images</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="main">
        <h1>Kool Kiwiana</h1>
        <hr>
        <?php
        // Pull links from the nav.php page and place them in the navigation div
        require("nav.php");
        ?>
        <br><br><hr>
        <?php
        // Get the connection to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
        <div id="container">
            <div class="headings1">
                <div><h2>Product</h2></div>
                <div><h2>Category</h2></div>
                <div><h2>Price</h2></div>
                <div><h2>Image</h2></div>
            </div>

           <?php
            // Creates a variable to store the SQL query
            $query = "SELECT products.Product_PK, products.Image, category.Category, price.Price
            FROM products
            INNER JOIN category ON products.Category_FK = category.Category_PK
            INNER JOIN price ON products.Price_FK = price.Price_PK
            ORDER BY category.Category ASC, price.Price ASC;";

            // Runs and stores the query using the variables $con (see nav.php) and $query
            $result = mysqli_query($conn, $query);

            // Runs in a 'while' loop
            while ($output = mysqli_fetch_array($result)) {
                ?>
                <!-- PHP is above. HTML is below. Used to output the query results -->
                <div class="headings2">
                    <div class="left"><p><?php echo $output['Product_PK']; ?></p></div>
                    <div><p><?php echo $output['Category']; ?></p></div>
                    <div><p><?php echo $output['Price']; ?></p></div>
                    <?php
                    // Get the correct path to the image based on the 'Image' value in the database
                    $imagePath = "Images/" . $output['Image'];
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
