<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Expletus+Sans&family=Orbitron&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
    // Puts the navigation bar from nav.php into the index page
    require("nav.php");
    ?>
</head>
<body>
    <img src="images/banner_placeholder.jpg" alt="Banner" id="banner">

    <div id="main">
        <h3>WELCOME TO THE KOOL KIWIANA WEBSITE</h3>
        <?php
        // Connecting the index page to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
        <p>This is the Kool Kiwiana website. We offer a number of different clothing and accessory products that you can browse through and read about. 
        Please feel free to use the contact form to contact us and provide feedback so that we can improve your experience in the future. We hope our 
        products catch your attention.</p>
    </div>

    <div id="background">
        <div class="row">
            <div id="feature_1" class="button">
                <a href="products.php" class="page.php">
                    <div id="title"><h3>Bugger BLK TEE - MENS</h3></div>
                    <div class="feature">
                        <img src="images/bugger_blk_tee_mens.jpg" alt="bugger_blk_tee_mens.jpg">
                        <div id="description">
                            <p2>Our men's tees are 180 GSM, 100% super soft combed cotton, pre-shrunk to minimise shrinkage, lightweight and 
                            side-seamed for that tailored cut. Designed specifically for the 
                            NZ body shape, we know you'll love the fit and feel of the tees as much as what's printed on them.</p2>
                        </div>
                    </div>
                </a>
            </div>

            <div id="feature_2" class="button">
                <a href="products.php" class="page.php">
                    <div id="title"><h3>BURGERQUEEN WATER TEE - WOMENS</h3></div>
                    <div class="feature">
                        <img src="images/burgerqueen_water_tee_womens-main.jpg" alt="burgerqueen_water_tee_womens-main.jpg">
                        <div id="description">
                            <p2>Our men's tees are 180 GSM, 100% super soft combed cotton, pre-shrunk to minimise shrinkage, 
                            lightweight and side-seamed for that tailored cut. Designed specifically for the NZ body shape, 
                            we know you'll love the fit and feel of the tees as much as what's printed on them.</p2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
