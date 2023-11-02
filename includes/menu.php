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


<input type="text" class="search" placeholder="Search" name="search" />
<div class="icons">
    <!-- <a href="#" class="fa fa-search"></a> -->
    <a href="#" class="fas fa-heart"></a>
    <a href="winkelwagen.php" class="fas fa-shopping-cart"></a>
    <a href="#" id="openModal" class="fas fa-user"></a>

</div>

<style>

/* search bar styling */
.search {
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

