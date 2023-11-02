<!DOCTYPE html>
<html>
<head>
    <title>Productpagina</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background: url("images/hero4.png"); 
            background-size: 1920px 1080px;
        }
    </style>
</head>
<header>
<?php include "includes/menu.php";?>
</header>
<body>
 <?php
$sql =     "SELECT 
                producten.id AS 'product_id',
                producten.product AS 'product_naam',
                producten.productsoort AS 'product_soort',
                producten.prijs AS 'prijs',
                producten.image AS 'image'
                FROM 
                `producten` ";

                 $stmt = $pdo->prepare($sql);
                 if (!$stmt->execute()) {
                     exit();
                 }

                 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { }
                  ?>


    <div class="product-container">
        <div class="product-image">
            <img src="images/Prime.png" alt="Productfoto">
        </div>
        <div class="product-info">
            <div class="product-title">Productnaam</div>
            <div class="product-price">€99.99</div>
            <div class="product-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt nulla sit amet quam sagittis, id vulputate erat convallis.
            </div>
            <div class="button-container">
                <button class="add-to-cart-button">Voeg toe aan winkelwagen</button>
                <br> <br>
                <button class="buy-now-button">Koop nu</button>
            </div>
        </div>
    </div>
</body>
<?php include "includes/footer.php";?>
</html>
