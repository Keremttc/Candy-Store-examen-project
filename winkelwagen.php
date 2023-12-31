<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("images/hero4.png"); 
            background-size: 1920px 1080px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .product-list {
            list-style: none;
            padding: 0;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-name {
            flex: 1;
        }

        .product-price {
            flex: 1;
            text-align: right;
        }

        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Winkelwagen</h2>
        <ul class="product-list">
            <li class="product-item">
                <img src="https://drinkprime.uk/cdn/shop/files/PrimeHydration_UK_1serve_500ml_BlueRaspberry_0000_800x.png?v=1697126350" alt="" style="width: 10%;">
                <span class="product-name">Prime Blue Raspperry</span>
                <span class="product-price">€4.99</span>
            </li>
            <li class="product-item">
                <img src="https://www.renassweets.nl/cdn/shop/files/Taki_s.png?v=1687012292&width=2040" alt="" style="width: 10%;">
                <span class="product-name">Takis Fuego</span>
                <span class="product-price">€3.99</span>
            </li>
        </ul>
        <div class="total">
            <span>Totaal:</span>
            <span>€8.98</span>
        </div>
        <a href="betaalpagina.php"><button type="submit">Betalen</button></a>
        <br>
        <a href="home.php"><button type="submit">Terug</button></a>
    </div>
</body>
</html>
