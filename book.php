<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Reservación</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Reservar ahora!</h1>
</div>

<section class="booking">

   <h1 class="heading-title">Reserva tu aventura!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Nombre :</span>
            <input type="text" placeholder="Introduce tu nombre" name="nombre" require>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Introduce tu email" name="email" require>
         </div>
         <div class="inputBox">
            <span>Telefono :</span>
            <input type="number" placeholder="No. telefono" name="telefono" require>
         </div>
         <div class="inputBox">
            <span>Dirección :</span>
            <input type="text" placeholder="Introduce tu dirección" name="add" require>
         </div>
         <div class="inputBox">
            <span>Personas :</span>
            <input type="number" placeholder="Numero de personas" name="personas" require>
         </div>
         <div class="inputBox">
            <span>Llegada :</span>
            <input type="date" name="llegada" require>
         </div>
         <div class="inputBox">
            <span>Salida :</span>
            <input type="date" name="salida" require>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>