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

<!-- User Story 3 & 8 Recep -->

 <?php

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    

    $sql = "SELECT 
                producten.id AS 'product_id',
                producten.product AS 'product_naam',
                producten.productsoort AS 'product_soort',
                producten.prijs AS 'prijs',
                producten.image AS 'image',
                producten.informatie AS 'ingredienten'
            FROM 
                `producten`
            WHERE
                producten.id = :product_id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

    if (!$stmt->execute()) {
        exit("Failed to execute the query.");
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {

        $product_name = $row['product_naam'];
        $product_type = $row['product_soort'];
        $product_price = $row['prijs'];
        $product_image = $row['image'];
        $product_ingredients = $row['ingredienten'];

        echo '<div class="product-container">';
        echo '<div class="product-image">';
        echo '<img src=" ' . $product_image . ' ">';
        echo '</div>';
        echo '<div class="product-info">';
        echo '<div class="product-title">' . $product_name . '</div>';
        echo '<div class="product-price">€' . number_format($product_price, 2) . '</div>';
        echo '<div class="product-description">' . $product_type . '</div>';
        echo '<br>';
        echo '<div class="product-description">' . $product_ingredients . '</div>';
        echo '<div class="button-container">';
        echo '<button onClick="getMessage()" class="add-to-cart-button">Voeg toe aan winkelwagen</button>';
        echo '<br> <br>';
        echo '<a href="betaalpagina.php"><button class="buy-now-button">Koop nu</button></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "Product niet gevonden.";
    }
} else {
    echo "Product ID niet in de URL.";
}
?>

</body>

<script>

function getMessage(){
    alert('Product toegevoegd aan winkelwagen!')
}

</script>

<?php include "includes/footer.php";?>

</html>

