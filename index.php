<!-- Landing page of the Kool Kiwiana website. -->
<html>
	<head>
    	<title>Home</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
    <div id="main">
        <h1>Kool Kiwiana</h1>
        <hr>
        <?php
        // Puts the navigation bar from nav.php into the index page
        require("nav.php");
        ?>
        <br><br><hr>
        <?php
        // Connecting the index page to the database
        require_once("Database_Assessment_mysqli.php");
        ?>
		<p>
			This is the Kool Kiwiana website. You can browse through the pages and see our list of products and their prices.
		</p>
    </div>
</body>
</html>
