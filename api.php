<?php

$productsJSONString = file_get_contents('https://thereportoftheweek-api.herouapp.com/reports');

$productsObject = json_decode($productsJSONString);
$products = $productsObject [0];
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>External PHP API Test</title>
</head>
<body>
    <h1>External PHP API Test</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Products Review</h2>
    <dl>
        <dt><h2>Product Details</h2></dt>
        <dd>
            <h2>Product</h2>
            <h3><?php echo $products-> product; ?></h3>
            <h2>Manufacturer</h2>
            <h3><?php echo $products-> manufacturer; ?></h3>
            <h2>Category</h2>
            <h3><?php echo $products-> Category; ?></h3>
            <h2>VideoTitle</h2>
            <h3><?php echo $products-> videoTitle; ?></h3>
            <h2>Video Code</h2>
            <h3><?php echo $products-> videoCode; ?></h3>
            <h2>Date Released</h2>
            <h3><?php echo $products-> dateReleased; ?></h3>
            <h2>Rating</h2>
            <h3><?php echo $products-> rating; ?></h3>
        </dd>
    </dl>
</body>
</html>