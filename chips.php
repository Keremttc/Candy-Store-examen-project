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

  <!-- header sectie eindigt -->

  <!-- home sectie begin -->

  <section class="home" id="home">
    
    <div class="content">
      <h3>Overheerlijke chips</h3>
      <span>Hieronder ons chips assortiment!</span>
  

  </section>

  <!-- home sectie eindigt -->


  <!-- product sectie start -->

  <section class="products" id="products">

    <h1 class="heading"><span>Chipsmixen</span> </h1>

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
                producten.productsoort = 'chips'";

                 $stmt = $pdo->prepare($sql);
                 if (!$stmt->execute()) {
                     exit();
                 }

                 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  ?>

            <?php $product_id = $row['product_id'];?>   

                <div class="box">
                        <div class="image">            
                        <a href="product-pagina.php?id=<?php echo $product_id;?>"><img src="<?php echo $row['image']?> " alt=""></a>
                            <div class="icons">
                              <a href="#" onClick="getFavorite()" class="fas fa-heart"></a>
                              <a href="#" onClick="getMessage()" class="add-to-cart">Toevoegen</a>
                              <a href="#" class="fas fa-share"></a>
                          </div>
                        </div>
                        <div class="content">
                          <h3><?php echo $row['product_naam'] ?></h3>
                          <div class="price">€<?php echo $row['prijs'] ?></div>
                      </div>
                    </div>


    <?php } ?>

                 </div>
                    </div>
                      </section>

  <!-- product sectie eindigt -->

</body>

<script>

// Meldingen voor knoppen Recep

function getMessage(){
    alert('Product toegevoegd aan winkelwagen!')
}

function getFavorite() {
  alert('Product toegoevoegd aan favorieten!');
}

</script>

 <!-- footer sectie begint -->

 <?php include "includes/footer.php"; ?>

<!-- footer sectie eindigt -->

</html>