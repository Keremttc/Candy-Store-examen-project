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
  
  <!-- header begin sectie -->

  <header>
  
  <?php include "includes/menu.php"; ?>

  </header>
  <div class="announcement-bar">
    <p>🎉 GRATIS VERZENDING BIJ BESTELLINGEN BOVEN €50 🚚</p>
  </div>


  <!-- header sectie eindigt -->

  <!-- home sectie begin -->

 <!-- register pop up modal -->

  <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModal">&times;</span>
    <h2>Registreren</h2>
    <br>
    <form>
      <label for="username">Gebruikersnaam:</label>
      <br>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Wachtwoord:</label>
      <br>
      <input type="password" id="password" name="password"><br><br>
      <button class="register" type="submit">Register</button>
    </form>
  </div>
</div>

 <!-- register pop up modal END -->

  <section class="home" id="home">

    <div class="content">
      <h3>Vers snoepgoed!</h3>
      <span>Weet wat je eet!</span>
      <p>Opzoek naar halal, glutenvrij of vegan snoep? Wij hebben het allemaal. Vandaag besteld is morgen in huis</p>
      <a href="#" class="btn">shop nu</a>

    </div>


    <!-- Error reporting -->
    
    <!-- <?php

          ini_set('display_errors', '1');

          ini_set('display_startup_errors', '1');

          error_reporting(E_ALL);
    
            ?> -->



  </section>

  <!-- home sectie eindigt -->

</body>
<script>
  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById('openModal');

// Get the <span> element that closes the modal
var span = document.getElementById('closeModal');

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = 'block';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
}
</script>
</html>