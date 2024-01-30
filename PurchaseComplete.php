<?php
  session_start();
?>
<html>
    <head>
     
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Game Spot One Stop Game Shop</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <link rel="icon" type="image/png" href="assets/images/logo.png">

      <script src="https://kit.fontawesome.com/f30943045c.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="assets/css/lightslider.css">
      <script src="assets/js/JQuery3.3.1.js"></script>
      <script src="assets/js/lightslider.js"></script>

      <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
      <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
      <meta name="author" content="_nK">

      <link rel="icon" type="image/png" href="images/logo.png">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- START: Styles -->

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

      <!-- Bootstrap -->
      <!--link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

      <!-- FontAwesome -->
      <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
      <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

      <!-- IonIcons -->
      <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

      <!-- Flickity -->
      <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

      <!-- Photoswipe -->
      <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
      <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

      <!-- Seiyria Bootstrap Slider -->
      <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

      <!-- Summernote -->
      <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">

      <!-- GoodGames -->
      <link rel="stylesheet" href="assets/css/goodgames.css">

      <!-- Custom Styles -->
      <link rel="stylesheet" href="assets/css/custom.css">

      <!-- END: Styles -->

      <!-- jQuery -->
      <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

<style type="text/css">
body {
    background-image: url('assets/images/bg-bg-bg.png');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
}
.cart{
  margin-top: 100px;
}
h3{
  text-align: center;
  color: white;
  font-size: 40px;
}
p{
  text-align: center;
  color: white;
  font-weight: 500;
}
.booker{
  margin-left: 30vw;
  background-color: #393e46;
  color: white;
  text-align: center;
  padding: 10px;
  width: 40%;
  border-radius: 10px;
  transition: transform 0.5s;
}

.booker:hover { 
  transform: scale(.8);
  background: #dd163b; 
}
</style>

    </head>



  <body>

                                        <!--------------------     NAVBAR     -------------------->

  <nav class="navbar navbar-expand-md" style="background-color: #121111;">
    <a href="loggedin_index.php"><img src ="assets/images/logo.png" alt="logo" width="40px">
    <a class="nav-link" href="loggedin_index.php">Store</a>


    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><img src ="assets/images/profile.png" alt="logo" width="40px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><img src ="assets/images/cart.png" alt="logo" width="40px"></a>
        </li>

        </ul>

    </div>
  </nav>


<div class= "cart">


<h3>Your Order Has Been Placed!</h3>
<p>Thank you for ordering with us, we will contact you by email with your order details.</p>

<a href="loggedin_browse.php"><button class="booker">Shop Again</button></a>