<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
      <h1>Quienes somos</h1>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="images/about-img.jpg" alt="about us">
      </div>

      <div class="content">
         <h3>¿Porque escojernos?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>Mas visitados</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>Mejores precios</span>
            </div>
         </div>
      </div>

   </section>
   <section class="reviews">

      <h1 class="heading-title">Los clientes opinan</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
               <h3>john deo</h3>
               <img src="images/pic-1.png" alt="person1">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
               <h3>john deo</h3>
               <img src="images/pic-2.png" alt="person2">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
               <h3>john deo</h3>
               <img src="images/pic-3.png" alt="person3">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
               <h3>john deo</h3>
               <img src="images/pic-4.png" alt="person4">
            </div>
         </div>
      </div>

   </section>

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>

</body>

</html>