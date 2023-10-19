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
      <h3>Vragen, problemen? stel ze hieronder</h3>
    </div>
  </section>

  <!-- home sectie eindigt -->

  <!-- contact sectie start -->

  <section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form actions="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
           <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>


    </div>


  </section>




  <!-- contact sectie eindigt -->





  

</body>
</html>