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
      <h3>Vers snoepgoed!</h3>
      <span>Hieronder ons snoep assortiment!</span>
  

  </section>

  <!-- home sectie eindigt -->


  <!-- product sectie start -->

  <section class="products" id="products">

    <h1 class="heading"><span>snoepmixen</span> </h1>

    <div class="box-container">
<?php
    $sql =     "SELECT 
                producten.id AS 'product_id',
                producten.product AS 'product_naam',
                producten.productsoort AS 'product_soort',
                producten.prijs AS 'prijs',
                producten.image AS 'image'
                FROM 
                `producten`
                WHERE 
                producten.productsoort = 'snoep'";

                 $stmt = $pdo->prepare($sql);
                 if (!$stmt->execute()) {
                     exit();
                 }

                 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  ?>


            

       <div class="box">
         <div class="image">            
             <img src="<?php echo $row['image']?> " alt="">
             <div class="icons">
               <a href="#" class="fas fa-heart"></a>
               <a href="#" class="cart-btn">Toevoegen</a>
               <a href="#" class="fas fa-share"></a>
           </div>
         </div>
         <div class="content">
           <h3><?php echo $row['product_naam']?></h3>
           <div class="price">€<?php echo $row['prijs'] ?></div>
       </div>
     </div>

    <?php } ?>

    <!-- <?php echo $sql; ?> -->

    <!-- <div class="box">
    --   <div class="image">            
    --       <img src="images/Nerds.png" alt="">
    --       <div class="icons">
    --         <a href="#" class="fas fa-heart"></a>
    --         <a href="#" class="cart-btn">Toevoegen</a>
    --         <a href="#" class="fas fa-share"></a>
    --     </div>
    --   </div>
    --   <div class="content">
    --     <h3>Nerds</h3>
    --     <div class="price">€1.99</div>
    -- </div> -->
  </div>




  </div>

  </section>
  
  <!-- product sectie eindigt -->

</body>
</html>