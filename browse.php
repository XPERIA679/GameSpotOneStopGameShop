<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <style type="text/css">
       @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
       .content{
         margin-top: 50px;
         margin-left: -200px;
       }
       
       /*--- navigation bar section ---*/
       .navbar {
         background:#282828;
       }
       .nav-link,
       .navbar-brand {
         color: #fff;
         cursor: pointer;
       }
       .nav-link:hover {
         color: #000;
       }
       .nav2-link {
         color: #fff;
         cursor: pointer;
       }
       .nav2-link:hover {
         color: #000;
       }
       .nav3-link {
         color: #fff;
         cursor: pointer;
         margin-left: 30px;
       }
       .nav3-link:hover {
         color: #000;
       }
       .navbar-collapse {
         justify-content: flex-end;
       }
       .content{
           position: relative;
           margin-top: 50px;
           margin-left: 200px;
           margin-bottom: 30px;
       }

            .filterDiv {
  display: none;
}
.show {
  align-items: center;
  display: block;
}
.btn:hover {
  background-color: #dd163b;
}
.nav4-link:hover{
  color: #121111;
  text-decoration: none;
}
.nav5-link:hover{
  color: #121111;
  text-decoration: none;
}
.btn.active {
  background-color: #dd163b;
  color: #fff;
}

        .pagination{
            text-align:  center;
            align-items: center;
            color: #fff;
            margin:  30px 30px 0px;
            user-select: none;
        }
        .pagination li{
            display: inline-block;
            align-items: center;
            margin:  5px;
            background-color: #dd163b;
            box-shadow: 0 5px 25px rgb(1 1 1 / 10%);
        }
        .pagination li a{
            text-decoration:  none;
            font-size:  1.2em;
            color: #fff;
            font-weight: bold;
            background-color:#121111;
            line-height:  30px;
        }
        .previous-page, .next-page{
            width:  150px;
            border-radius:  50%;
            cursor:  pointer;
            font-weight: bold;
            transition: 0.3s ease;
        }
        .previous-page:hover{
            transform: translateX(-5px);
        }
        .next-page:hover{
            transform: translateX(5px);
        }
        .current_page, .dots{

            width:  70px;
            border-radius: 50%;
            font-weight: bold;
            cursor: pointer;
        }
        .actived{
            background: #dd163b;
        }
        .disable{
            background: #dd163b;
        }
      </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Gaming Spot One Stop Game Shop</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <script src="https://kit.fontawesome.com/f30943045c.js" crossorigin="anonymous"></script>

      <link rel="icon" type="image/png" href="assets/images/logo.png">

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
</style>
    </head>



  <body>

                                        <!--------------------     NAVBAR     -------------------->

  <nav class="navbar navbar-expand-md" style="background-color: #121111;">
    <a href="index.php"><img src ="assets/images/logo.png" alt="logo" width="40px">
    <a class="nav-link" href="index.php">Store</a>


    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="bsi.php"><img src ="assets/images/profile.png" alt="logo" width="40px"></a>
        </li>
        </li>

        </ul>

    </div>
  </nav>                                        <!--------------------     END OF NAVBAR     -------------------->


        <div class="content">                                                   <!--------------------     DIV CLASS CONTENT     -------------------->
        <a class="nav4-link" href="bsi.php">Discover</a>
        <a class="nav5-link" href="browse.php">Browse</a> </div> <!--------------------     END OF DIV CLASS CONTENT     -------------------->




<div class="Browse">
        <div class="container">

            <!-- START: Image Slider -->
            <div class="nk-image-slider" data-autoplay="8000">


                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-1.png" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1-thumb.png">

                    <div class="nk-image-slider-content">

                <h3 class="h4">FPS Action Games</h3>
                <p class="text-white">An action game is a video game genre that emphasizes physical challenges, including hand–eye coordination and reaction-time. The genre includes a large variety of sub-genres, such as fighting games, beat 'em ups, shooter games, and platform games.</p>
                <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div> 

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-2.png" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2-thumb.png">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Action-Adventure Games</h3>
                <p class="text-white">An action game is a video game genre that emphasizes physical challenges, including hand–eye coordination and reaction-time.</p>
                <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3-thumb.jpg">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Merchandise</h3>
                <p class="text-white">Our Gaming Stop also provides accessories, action figures, t-shirts, and other goods just for you! We also have limited promos that are offered for sale that are purchasable by our regulars.</p>
                <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-4.PNG" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4-thumb.PNG">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Multiplayer Games</h3>
                <p class="text-white">A multiplayer video game is a video game in which more than one person can play the same game together.</p>
                <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-5.PNG" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-5-thumb.PNG">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Horror Games</h3>
                <p class="text-white">A horror game is a video game genre centered on horror fiction and typically designed to scare the player.</p>
                <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

            </div>
                </div>
                <!-- END: Categories -->

                <div class="nk-gap-2"></div>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <!-- START: Products -->
                        <div class="row vertical-gap list">

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Valorant</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-2-xs.jpg" alt="Uncharted">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Uncharted 4</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,999.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-3-xs.jpg" alt="Apex Legends">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Apex Legends</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-4-xs.jpg" alt="Breath of the Wild">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Breath of the Wild</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,147.98</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-5-xs.jpg" alt="Titanfall">
                                    </a>
                                    <div class="nk-product-cont">
                                          <h3 class="nk-product-title h5"><a href="bsi.php">Titanfall</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 496.69</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-6-xs.jpg" alt="Tomb Raider">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Tomb Raider</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 589.99</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-7-xs.jpg" alt="Red Dead Redemption 2">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Red Dead Redemption 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,300.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-8-xs.jpg" alt="Resident Evil Biohazard">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Resident Evil Biohazard</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 995.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-9-xs.jpg" alt="Left 4 Dead 2">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Left 4 Dead 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 289.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-10-xs.jpg" alt="Naruto Ninja Storm 4">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Naruto Ninja Storm 4</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,350.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-11-xs.jpg" alt="Insurgency">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Insurgency</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 895.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-12-xs.jpg" alt="It takes two">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">It takes two</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-13-xs.jpg" alt="Halo">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Halo</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 289.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/adventure-GTA.jpg" alt="GTA: San Andreas">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">GTA: San Andreas</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/fps-Farcry.jpg" alt="Farcry">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Farcry</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,200.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/adventure-EldenRing.jpg" alt="Elden Ring">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Elden Ring</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,999.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-17-xs.jpg" alt="Call of Duty: Infinite Warfare">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Call of Duty: Infinite Warfare</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/fps-borderlands.jpg" alt="Borderlands">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Borderlands</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,399.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-19-xs.jpg" alt="Devil May Cry">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Devil May Cry</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 991.90</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/adventure-AssassinsCreed.jpg" alt="Assasins Creed">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.phpl">Assasins Creed</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,200.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-21-xs.jpg" alt="Death Stranding">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Death Stranding</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,855.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/fps-CounterStrike.webp" alt="Counter Strike">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Counter Strike</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 790.31</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-23-xs.jpg" alt="Battlefield">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">BattleField</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,599.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/product-24-xs.jpg" alt="Crysis">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Crysis</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 649.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-lastofus-1.jpg" alt="The Last of Us">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">The Last of Us</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,099.56</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-amongus-1.jpg" alt="Among Us">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Among Us</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 159.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-alien.png" alt="Alien: Isolation">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Alien: Isolation</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,620.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-residentevil7-1.jpg" alt="Resident Evil 7 VR">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Resident Evil 7 VR</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 995.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-residentevil3-1.jpg" alt="Resident Evil Village">
                                    </a>
                                    <div class="nk-product-cont">
                                          <h3 class="nk-product-title h5"><a href="bsi.php">Resident Evil Village</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,650.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-animalcrossing-1.jpg" alt="Animal Crossing: New Horizons">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Animal Crossing: New Horizons</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,119.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-callofduty-1.jpg" alt="Call of Duty: Warzone">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Call of Duty: Warzone</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 199.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-deadrising-1.jpg" alt="Dead Rising">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Dead Rising</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-littlenightmares-1.jpg" alt="Little Nightmares">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Little Nightmares</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 740.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-halo-1.jpg" alt="Halo: The Master Chief Collection">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Halo: The Master Chief Collection</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 829.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-metro-1.jpg" alt="Metro Exodus">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Metro Exodus</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,117.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href=bsi.php">
                                        <img src="assets/images/horror-evilwithin-1.jpg" alt="The Evil Within 2">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">The Evil Within 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,845.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-haloinfinite-1.jpg" alt="Halo Infinite">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Halo Infinite</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-finalfantasy1.jpg" alt="Final Fantasy XIV Online">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Final Fantasy XIV Online</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 784.88</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-mariokart-1.jpg" alt="Mario Kart 8">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Mario Kart 8</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 944.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-splitgate-1.jpg" alt="Splitgate">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Splitgate</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/super-smashbros_new.jpg" alt="Super Smash Brothers Ultimate">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Super Smash Brothers Ultimate</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,138.98</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-condemned-1.jpg" alt="Condemned: Criminal Origins">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Condemned: Criminal Origins</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 419.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-systemshock-1.jpg" alt="System Shock 2">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">System Shock 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 319.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-guiltygear-1.jpg" alt="Guilty Gear Strive">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Guilty Gear Strive</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,795.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/horror-amnesia-1.jpg" alt="Amnesia: The Dark Descent">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Amnesia: The Dark Descent</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-rainbow-1-1.jpg" alt="Rainbow Six: Seige">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Rainbow Six: Seige</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 750.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/outlast_sidebar.jpg" alt="The Outlast">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">The Outlast</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/multiplayer-fallguys-1.jpg" alt="Fall Guys">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Fall Guys</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/fps-Battlefield.jpg" alt="Battlefield">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Battlefield</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,599.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/bundle-farcry-1.png" alt="Far Cry Bundle">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Far Cry Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,179.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/bundle-res-evil-1.png" alt="Resident Evil Bundle">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Resident Evil Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,149.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="bsi.php">
                                        <img src="assets/images/bundle-forza-1.png" alt="Forza Horizon Bundle">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="bsi.php">Forza Horizon Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,139.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="bsi.php" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END: Products -->

                        <!-- START: Pagination -->

                      <div class="pagination"><!--
                          <li class="page-item previous-page disable"><a class="page-link" href="#"></a>Prev</li>
                          <li class="page-item current-page actived"><a class="page-link" href="#"></a>1</li>
                          <li class="page-item dots"><a class="page-link" href="#"></a>...</li>
                          <li class="page-item current-page"><a class="page-link" href="#"></a>5</li>
                          <li class="page-item current-page"><a class="page-link" href="#"></a>6</li>
                          <li class="page-item dots"><a class="page-link" href="#"></a>...</li>
                          <li class="page-item current-page"><a class="page-link" href="#"></a>10</li>
                          <li class="page-item next-page"><a class="page-link" href="#"></a>Next</li>-->
                      </div>
                      <script>
                          function getPageList(totalPages, page, maxLength){
                            function range(start, end){
                                return Array.from(Array(end - start + 1), (_, i) => i + start);
                            }

                            var sideWidth = maxLength < 9 ? 1 : 2;
                            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                            var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

                            if(totalPages <= maxLength){
                                return range(1, totalPages);
                            }

                            if(page <= maxLength - sideWidth - 1 - rightWidth){
                                return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                            }

                            if(page >= totalPages - sideWidth - 1 - rightWidth){
                                return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                            }

                            return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
                          }

                          $(function(){
                            var numberOfItems = $(".list .filterDiv").length;
                            var limitPerPage = 6;
                            var totalPages = Math.ceil(numberOfItems / limitPerPage);
                            var paginationSize = 5;
                            var currentPage;

                            function showPage(whichPage){
                                if(whichPage < 1 || whichPage > totalPages) return false;

                                currentPage = whichPage;

                                $(".list .filterDiv").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                                $(".pagination li").slice(1, -1).remove();

                                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                                    $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
                                });

                                $(".previous-page").toggleClass("disable", currentPage === 1);
                                $(".next-page").toggleClass("disable", currentPage === totalPages);
                                return true;
                            }

                            $(".pagination").append(
                                $("<li>").addClass("page-item").addClass("previous-page").append(
                                    $("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
                                $("<li>").addClass("page-item").addClass("next-page").append(
                                    $("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
                            );

                            $(".list").show();
                            showPage(1);

                            $(document).on("click", ".pagination li.current-page:not(.active)", function(){
                                return showPage(+$(this).text());
                            });

                            $(".next-page").on("click", function(){
                                return showPage(currentPage + 1);
                            });

                            $(".previous-page").on("click", function(){
                                return showPage(currentPage - 1);
                            });
                          });
                      </script>
                        <!-- END: Pagination -->

                    </div>
                    <div class="col-lg-4">
                        <!--
                            START: Sidebar

                            Additional Classes:
                                .nk-sidebar-left
                                .nk-sidebar-right
                                .nk-sidebar-sticky
                        -->
                        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                            <div class="nk-widget">
                <div class="nk-widget-content">
                    <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type something...">
                            <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span><span class="text-main-1">Category</span> Menu</span></h4>
                <div class="nk-widget-content" id="myBtnContainer">
                    <ul class="nk-widget-categories">
                        <li><a class="btn" onclick="filterSelection('all')">Show All</a></li>
                        <li><a class="btn" onclick="filterSelection('action')">Action</a></li>
                        <li><a class="btn" onclick="filterSelection('fps')">FPS</a></li>
                        <li><a class="btn" onclick="filterSelection('adventure')">Adventure</a></li>
                        <li><a class="btn" onclick="filterSelection('multiplayer')">Multiplayer</a></li>
                        <li><a class="btn" onclick="filterSelection('horror')">Horror</a></li>
                        <li><a class="btn" onclick="filterSelection('bundle')">Bundles</a></li>

                    </ul>
                </div>
            </div>
            <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
</script>
    <!--        <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span><span class="text-main-1">Price</span> Filter</span></h4>
                <div class="nk-widget-content">
                    <div class="nk-input-slider">
                        <input
                            type="text"
                            name="price-filter"
                            data-slider-min="0"
                            data-slider-max="1800"
                            data-slider-step="1"
                            data-slider-value="[200, 1200]"
                            data-slider-tooltip="hide"
                        >
                        <div class="nk-gap"></div>
                        <div>
                            <div class="text-white mt-4 float-left">
                                PRICE:
                                <strong class="text-main-1">€ <span class="nk-input-slider-value-0"></span></strong>
                                -
                                <strong class="text-main-1">€ <span class="nk-input-slider-value-1"></span></strong>
                            </div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Apply</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> -->
           <!--- <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
                <div class="nk-widget-content"> -->
                    <!--
                        Social Links 3

                        Additional Classes:
                            .nk-social-links-cols-5
                            .nk-social-links-cols-4
                            .nk-social-links-cols-3
                            .nk-social-links-cols-2

                </div>
            </div>
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
                <div class="nk-widget-content">

                    <div class="nk-widget-post">
                        <a href="store-product.html" class="nk-post-image">
                            <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                        <div class="nk-product-price">€ 23.00</div>
                    </div>

                    <div class="nk-widget-post">
                        <a href="store-product.html" class="nk-post-image">
                            <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                        <div class="nk-product-price">€ 32.00</div>
                    </div>

                    <div class="nk-widget-post">
                        <a href="store-product.html" class="nk-post-image">
                            <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <div class="nk-product-price">€ 14.00</div>
                    </div>

                </div>
            </div>
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span>Instagram</span></h4>
                <div class="nk-widget-content">
                    <div class="nk-instagram row sm-gap vertical-gap multi-column"></div>
                </div>
            </div>
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span>Our Twitter</span></h4>
                <div class="nk-widget-content">
                    <div class="nk-twitter-list" data-twitter-count="2"></div>
                </div>
            </div>

                        </aside>
                        <!-- END: Sidebar -->
                    </div>
                </div>
            </div>

            <div class="nk-gap-2"></div>



                        <!-- START: Footer -->


                </div>




                    <!-- START: Page Background -->

                <img class="nk-page-background-top" src="assets/images/bg-top-4.png" alt="">
                <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

            <!-- END: Page Background -->




                    <!-- START: Search Modal -->
            <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="ion-android-close"></span>
                            </button>

                            <h4 class="mb-0">Search</h4>

                            <div class="nk-gap-1"></div>
                            <form action="#" class="nk-form nk-form-style-1">
                                <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Search Modal -->



                    <!-- START: Login Modal -->
            <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="ion-android-close"></span>
                            </button>

                            <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                            <div class="nk-gap-1"></div>
                            <form action="#" class="nk-form text-white">
                                <div class="row vertical-gap">
                                    <div class="col-md-6">
                                        Use email and password:

                                        <div class="nk-gap"></div>
                                        <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                                        <div class="nk-gap"></div>
                                        <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        Or social account:

                                        <div class="nk-gap"></div>

                                        <ul class="nk-social-links-2">
                                            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                            <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="nk-gap-1"></div>
                                <div class="row vertical-gap">
                                    <div class="col-md-6">
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mnt-5">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mnt-5">
                                            <small><a href="#">Not a member? Sign up</a></small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Login Modal -->




            <!-- START: Scripts -->

            <!-- Object Fit Polyfill -->
            <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

            <!-- GSAP -->
            <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
            <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

            <!-- Popper -->
            <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

            <!-- Bootstrap -->
            <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Sticky Kit -->
            <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

            <!-- Jarallax -->
            <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
            <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

            <!-- imagesLoaded -->
            <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

            <!-- Flickity -->
            <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

            <!-- Photoswipe -->
            <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
            <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

            <!-- Jquery Validation -->
            <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

            <!-- Jquery Countdown + Moment -->
            <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
            <script src="assets/vendor/moment/min/moment.min.js"></script>
            <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

            <!-- Hammer.js -->
            <script src="assets/vendor/hammerjs/hammer.min.js"></script>

            <!-- NanoSroller -->
            <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

            <!-- SoundManager2 -->
            <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

            <!-- Seiyria Bootstrap Slider -->
            <script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

            <!-- Summernote -->
            <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

            <!-- nK Share -->
            <script src="assets/plugins/nk-share/nk-share.js"></script>

            <!-- GoodGames -->
            <script src="assets/js/goodgames.min.js"></script>
            <script src="assets/js/goodgames-init.js"></script>
            <!-- END: Scripts -->


</div>
            </body>
                                                                        <!--------------------     SLIDER SCRIPT     -------------------->
            <script>
                $(document).ready(function() {
                    $('#autoWidth').lightSlider( {
                        autoWidth:true, loop:true, onSliderLoad: function() {
                            $('#autoWidth').removeClass('.c-hidden');
                        }
                    });
                });
            </script>                                                       <!--------------------     END OF SLIDER SCRIPT     -------------------->
<br><br><br><br><br>

<!-- FOOTER SECTION -->
<footer>
    <div class="footer-content">
        <h3>Gaming Spot One Stop Game Shop</h3>
            <p>Specializes various wherein anyone can purchase
                games online. Also, it focuses on customers’ efficiency and comfort when
                selecting their choice of game.<br><br>
                We sell items that are highly recommended and most preferred items
                that ensure customer satisfaction and improve sales metrics.</p>
<ul class="socials">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
</ul>
    </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 GamingSpotOneStopGameShop. designed by <span>Gaming Spot Corporation</span></p>
        </div>
</footer>
<!-- END OF FOOTER SECTION -->

    </body>      <!-- END OF BODY -->
    </html>      <!-- END OF HTML -->
