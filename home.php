<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

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

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Explora, Descubre, Viaja</span>
               <h3>Conoce el Mundo</h3>
               <a href="package.php" class="btn">Descubre mas!</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
            <span>Explora, Descubre, Viaja</span>
               <h3>Conoce el Mundo</h3>
               <a href="package.php" class="btn">Descubre mas!</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
            <span>Explora, Descubre, Viaja</span>
               <h3>Conoce el Mundo</h3>
               <a href="package.php" class="btn">Descubre mas!</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>Quienes somos</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">Leer mas</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">Nuestros paquetes</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
         <h3>Aventura</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Reserva ahora!</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
         <h3>Aventura</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Reserva ahora!</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Ver todos los paquetes</a> </div>

</section>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>