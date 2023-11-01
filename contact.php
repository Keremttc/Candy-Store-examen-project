<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chopper's Candy-Store</title>

  <!-- font link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- css file link -->
  <link rel="stylesheet" href="style.css">


</head>
<body>

  <!-- link naar logo -->
  
  
  <!-- header begin sectie -->

  <header>

  <?php include "includes/menu.php"; ?>

  </header>

  <!-- header sectie eindigt -->

  <!-- home sectie begin -->

  <section class="home" id="home">

    <div class="content">
      <h3>Vragen, problemen? stel ze hier!</h3>
    </div>

    <?php include "includes/contact_form.php";?>

  </section>

  <!-- home sectie eindigt -->

  <!-- contact sectie start -->

  <!-- <section class="contact" id="contact">

    <h1 class="heading"> <span> Contacteer </span> ons </h1>

    <div class="row">

        <form actions="">
            <input type="text" placeholder="Naam" class="box">
            <br>
            <input type="email" placeholder="Email" class="box">
            <br>
           <textarea name="" class="box" placeholder="Bericht" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Verzend bericht" class="btn">
        </form>


    </div>


  </section> -->

  <!-- contact sectie eindigt -->




  <!-- footer sectie begint -->

  <footer class="footer">
      <div class="col">
        <h4>contact</h4>
        <p><strong>Adres:</strong> Westcoast</p>
        <p><strong>KVK:</strong> 70560978</p>
        <p><strong>BTW nummer:</strong> NL858374511B01</p>
        <p><strong>Telefoonnummer:</strong> 05494939</p>
        <p><strong>Uren beschikbaar:</strong> 10:00 - 17:00 Ma - Vrij</p>
      </div>


      <div class="col">
        <h4>About</h4>
        <a href="#">Over ons</a>
        <a href="#">Verzend informatie</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="contact.php">Contacteer ons</a>
      </div>

      
      <div class="col">
        <h4>Mijn account</h4>
        <a href="#">Log in</a>
        <a href="#">Bekijk winkelwagen</a>
        <a href="#">Bekijk favorieten</a>
        <a href="#">Track mijn order</a>
        <a href="contact.php">Help</a>
      </div>


      <div class="col install">
        <div class="row">
          <p>Secured payments </p>
          <img src="images/pay.png" alt="">
      </div>

      <div class="copyright">
        <p> © 2023, Chopper's Candy-Store - All rights reserved</p>
        <div>

    </footer>

    <!-- footer sectie eindigt -->


</body>
</html>