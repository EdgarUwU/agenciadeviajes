<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Paquetes</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">Una nueva Aventura</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">Paquetes</a>
         <a href="book.php">Reserva!</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
      <h1>Paquetes</h1>
   </div>

   <!-- packages section starts  -->

   <section class="packages">

      <h1 class="heading-title">Mas visitados</h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Nose un hotel</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
               <a href="book.php" class="btn">Reservar ahora!</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Nose otro</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
               <a href="book.php" class="btn">Reservar ahora!</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Nose otro</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
               <a href="book.php" class="btn">Reservar ahora!</a>
            </div>
         </div>
      </div>

   </section>

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>

</body>

</html>