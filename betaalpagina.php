<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betalen</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 95%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
        }

        .payment-method {
            margin-top: 20px;
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
 
        <!-- Betaalgegevens form div start -->
    <div class="container">
        <h2>Betaalgegevens</h2>
        <form>
            <label for="cardNumber">Kaart Nummer</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

            <label for="expirationDate">Verval Datum</label>
            <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>

            <label for="nameOnCard">Naam op Kaart</label>
            <input type="text" id="nameOnCard" name="nameOnCard" required>

            <label for="adres">Adres</label>
            <input type="text" id="adres" name="adres" required>

            <label for="country">Factureringsland</label>
            <select id="country" name="country" required>
                <option value="us">Nederland</option>
                <option value="ca">Belgie</option>
                <!-- Add more options as needed -->
            </select>

            <div class="payment-method">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod" required>
                    <option value="creditCard">Credit Card</option>
                    <option value="ideal">iDeal</option>
                    <option value="paypal">Paypal</option>
                    <!-- Add more payment methods as needed -->
                </select>
            </div>
            <button type="submit">Betaling Bevestigen</button>
        </form>
    </div>

            <!-- Betaalgegevens form div eind -->
</body>
</html>
