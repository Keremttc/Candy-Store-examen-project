<!DOCTYPE html>
<?php include "includes/db.php";?> 

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<!-- Logo nav -->

<a href="home.php"><img src="images/choppper.png" class="logo" alt=""></a>

<!-- Pagina knoppen  -->

<!-- User Story 1  -->

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="snoep.php">Snoep</a>
    <a href="chips.php">Chips</a>
    <a href="softdrink.php">Softdrink</a>
    <a href="Contact.php">Contact</a>
</nav>

<!-- Pagina knoppen eind -->

<!-- Search bar en extra knoppen -->

<!-- User Story 6 -->

<input type="search" id="search" placeholder="Search">
<div class="icons">
    <!-- <a href="#" class="fa fa-search"></a> -->
    <a href="#" id="openModal" class="fas fa-user"></a>
    <a href="#" class="fas fa-heart"></a>
</div>
<?php include "includes/cart.php";?>
  
</body>

<style>

/* search bar styling kerem */
/* <!-- User Story 6 --> */
#search {
  padding: 0.5em;
  font-size: 1em;
  border: 0;
  border-bottom: 2px solid #ff9cb4;
  width: 20%;
  -webkit-box-shadow: none;
  box-shadow: 0;
  color: #ff9cb4;
  outline: none;
  
  &:focus{
    border-bottom-color: #ff9cb4;
  }
}

</style>

<!-- Zoekbalk functie (Recep) -->

<script>

  /* <!-- User Story 6 --> */
  const searchInput = document.getElementById('search');

  searchInput.addEventListener('change', function() {
    const searchValue = this.value.trim().toLowerCase(); 

    if (searchValue === 'snoep') {
      window.location.href = '/Candy-Store-examen-project/snoep.php';
    } else if (searchValue === 'chips') {
      window.location.href = '/Candy-Store-examen-project/chips.php';
    } else if (searchValue === 'drinken') {
      window.location.href = '/Candy-Store-examen-project/softdrink.php';
    } else if (searchValue === 'softdrink') {
      window.location.href = '/Candy-Store-examen-project/softdrink.php';
    } else if (searchValue === 'contact') {
      window.location.href = '/Candy-Store-examen-project/contact.php';
    } else {
      // Pagina bestaat niet alert
      alert('Kon pagina niet vinden, probeer nogmaals.');
    }
  });
</script>

</html>


