<?php include "includes/db.php";
       ?> 

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="home.php"><img src="images/choppper.png" class="logo" alt=""></a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="snoep.php">Snoep</a>
    <a href="chips.php">Chips</a>
    <a href="softdrink.php">Softdrink</a>
    <a href="Contact.php">Contact</a>
</nav>

<div class="icons">
    <!-- <a href="#" class="fa fa-search"></a> -->
    <input type="text" name="search" placeholder="Search.."> 
    <a href="#" class="fas fa-heart"></a>
    <a href="winkelwagen.php" class="fas fa-shopping-cart"></a>
    <a href="#" id="openModal" class="fas fa-user"></a>

</div>

<style>

input[name=search] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('images/searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[name=search]:focus {
  width: 100%;
}
    input[name=search] {
  width: 130px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
    }

    /* When the input field gets focus, change its width to 100% */
    input[name=search]:focus {
    width: 100%;
    }
</style>

