<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        #contact-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            margin-top:100px;
        }

        #contact-info {
            flex: 1;
            padding: 20px;
        }

        #contact-form {
            flex: 2;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[name="name"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


        <!-- Contact form start  -->

    <div id="contact-container">
        <div id="contact-info">
            <h1>Chopper's <br> Candy Store</h1>
            <br>
            <p style="font-weight:bold;">Beschikbaarheid:</p>
            <br>
            <p style="font-style:italic;">Maandag - Vrijdag: <br>9:00 - 18:00</p>
            <p style="font-style:italic;">Zaterdag: <br>10:00 - 14:00 </p>
            <p style="font-style:italic;">Zondag: Gesloten</p>
        </div>
        <div id="contact-form">
            <h1>Contact</h1>
            <form>
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Bericht</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Versturen</button>
            </form>
        </div>
    </div>
    
        <!-- Contact form eind  -->

</body>
</html>
