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
  </nav>                                        <!--------------------     END OF NAVBAR     -------------------->


        <div class="content">                                                   <!--------------------     DIV CLASS CONTENT     -------------------->
        <a class="nav4-link" href="loggedin_index.php">Discover</a>
        <a class="nav5-link" href="loggedin_browse.php">Browse</a> </div> <!--------------------     END OF DIV CLASS CONTENT     -------------------->




<div class="Browse">
        <div class="container">

            <!-- START: Image Slider -->
            <div class="nk-image-slider" data-autoplay="8000">


                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-1.png" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1-thumb.png">

                    <div class="nk-image-slider-content">

                <h3 class="h4">FPS Action Games</h3>
                <p class="text-white">An action game is a video game genre that emphasizes physical challenges, including hand–eye coordination and reaction-time. The genre includes a large variety of sub-genres, such as fighting games, beat 'em ups, shooter games, and platform games.</p>
                <a href="genre-fpspage.html" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-2.png" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2-thumb.png">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Action-Adventure Games</h3>
                <p class="text-white">An action game is a video game genre that emphasizes physical challenges, including hand–eye coordination and reaction-time.</p>
                <a href="genre-adventure.html" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3-thumb.jpg">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Merchandise</h3>
                <p class="text-white">Our Gaming Stop also provides accessories, action figures, t-shirts, and other goods just for you! We also have limited promos that are offered for sale that are purchasable by our regulars.</p>
                <a href="merch.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-4.PNG" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4-thumb.PNG">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Multiplayer Games</h3>
                <p class="text-white">A multiplayer video game is a video game in which more than one person can play the same game together.</p>
                <a href="genre-multiplayer.html" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-5.PNG" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-5-thumb.PNG">

                    <div class="nk-image-slider-content">

                <h3 class="h4">Horror Games</h3>
                <p class="text-white">A horror game is a video game genre centered on horror fiction and typically designed to scare the player.</p>
                <a href="genre-horror.html" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">View All</a>

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
                                    <a class="nk-product-image" href="fps-valo.php">
                                    <?php
                                            include "DB_CONNECTOR.php";

                                            $sql = "SELECT * FROM products where id=1";
                                            $res = mysqli_query($dbc, $sql) or die( mysqli_error($dbc));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="Tomb Raider">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-valo.php">Valorant</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('DB_CONNECTOR.php');
                                        if ($dbc-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=1 && added='no'" ;
                                            $result = $dbc-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-unchar.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR1.php";

                                            $sql = "SELECT * FROM products where id=2";
                                            $res = mysqli_query($dbc1, $sql) or die( mysqli_error($dbc1));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="Uncharted">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-unchar.php">Uncharted 4</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,999.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR1.php');
                                        if ($dbc1-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=2 && added='no'" ;
                                            $result = $dbc1-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc1-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-apex.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR2.php";

                                            $sql = "SELECT * FROM products where id=3";
                                            $res = mysqli_query($dbc2, $sql) or die( mysqli_error($dbc2));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="Apex Legends">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-apex.php">Apex Legends</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR2.php');
                                        if ($dbc2-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=3 && added='no'" ;
                                            $result = $dbc2-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc2-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-zel.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR3.php";

                                            $sql = "SELECT * FROM products where id=4";
                                            $res = mysqli_query($dbc3, $sql) or die( mysqli_error($dbc3));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Breath of the Wild">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-zel.php">Breath of the Wild</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,147.98</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR3.php');
                                        if ($dbc3-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=4 && added='no'" ;
                                            $result = $dbc3-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc3-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-titan.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR4.php";

                                            $sql = "SELECT * FROM products where id=5";
                                            $res = mysqli_query($dbc4, $sql) or die( mysqli_error($dbc4));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Titanfall">
                                    </a>
                                    <div class="nk-product-cont">
                                          <h3 class="nk-product-title h5"><a href="fps-titan.php">Titanfall</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 496.69</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR4.php');
                                        if ($dbc4-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=5 && added='no'" ;
                                            $result = $dbc4-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc4-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-tomb.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR5.php";

                                            $sql = "SELECT * FROM products where id=6";
                                            $res = mysqli_query($dbc5, $sql) or die( mysqli_error($dbc4));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Tomb Raider">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-tomb.php">Tomb Raider</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 589.99</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR5.php');
                                        if ($dbc5-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=6 && added='no'" ;
                                            $result = $dbc5-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc5-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-red.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR6.php";

                                            $sql = "SELECT * FROM products where id=7";
                                            $res = mysqli_query($dbc6, $sql) or die( mysqli_error($dbc6));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-red.php">Red Dead Redemption 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,300.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR6.php');
                                        if ($dbc6-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=7 && added='no'" ;
                                            $result = $dbc6-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc6-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-res.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR7.php";

                                            $sql = "SELECT * FROM products where id=8";
                                            $res = mysqli_query($dbc7, $sql) or die( mysqli_error($dbc7));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-res.php">Resident Evil Biohazard</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 995.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR7.php');
                                        if ($dbc7-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=8 && added='no'" ;
                                            $result = $dbc7-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc7-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-left.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR8.php";

                                            $sql = "SELECT * FROM products where id=9";
                                            $res = mysqli_query($dbc8, $sql) or die( mysqli_error($dbc8));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-left.php">Left 4 Dead 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 289.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR8.php');
                                        if ($dbc8-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=9 && added='no'" ;
                                            $result = $dbc8-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc8-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-naru.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR9.php";

                                            $sql = "SELECT * FROM products where id=10";
                                            $res = mysqli_query($dbc9, $sql) or die( mysqli_error($dbc9));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-naru.php">Naruto Ninja Storm 4</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,350.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR9.php');
                                        if ($dbc9-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=10 && added='no'" ;
                                            $result = $dbc9-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc9-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-Insur.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR10.php";

                                            $sql = "SELECT * FROM products where id=11";
                                            $res = mysqli_query($dbc10, $sql) or die( mysqli_error($dbc10));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-Insur.php">Insurgency</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 895.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR10.php');
                                        if ($dbc10-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=11 && added='no'" ;
                                            $result = $dbc10-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc10-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-ittakes.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR11.php";

                                            $sql = "SELECT * FROM products where id=12";
                                            $res = mysqli_query($dbc11, $sql) or die( mysqli_error($dbc11));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-ittakes.php">It takes two</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR11.php');
                                        if ($dbc11-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=12 && added='no'" ;
                                            $result = $dbc11-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc11-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-halo.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR12.php";

                                            $sql = "SELECT * FROM products where id=13";
                                            $res = mysqli_query($dbc12, $sql) or die( mysqli_error($dbc12));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-halo.php">Halo</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 289.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR12.php');
                                        if ($dbc6-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=13 && added='no'" ;
                                            $result = $dbc12-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc12-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-GTA.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR13.php";

                                            $sql = "SELECT * FROM products where id=14";
                                            $res = mysqli_query($dbc13, $sql) or die( mysqli_error($dbc13));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-GTA.php">GTA: San Andreas</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR13.php');
                                        if ($dbc6-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=14 && added='no'" ;
                                            $result = $dbc13-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc13-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-farc.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR14.php";

                                            $sql = "SELECT * FROM products where id=15";
                                            $res = mysqli_query($dbc14, $sql) or die( mysqli_error($dbc14));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-farc.php">Farcry</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,200.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR14.php');
                                        if ($dbc14-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=15 && added='no'" ;
                                            $result = $dbc14-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc14-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-elden.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR15.php";

                                            $sql = "SELECT * FROM products where id=16";
                                            $res = mysqli_query($dbc15, $sql) or die( mysqli_error($dbc15));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-elden.php">Elden Ring</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,999.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR15.php');
                                        if ($dbc15-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=16 && added='no'" ;
                                            $result = $dbc15-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc15-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-cod.php">
                                    <?php
                                            include "other_connectors/DB_CONNECTOR16.php";

                                            $sql = "SELECT * FROM products where id=17";
                                            $res = mysqli_query($dbc16, $sql) or die( mysqli_error($dbc16));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-cod.php">Call of Duty: Infinite Warfare</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR16.php');
                                        if ($dbc16-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=17 && added='no'" ;
                                            $result = $dbc16-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc16-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-Border.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR17.php";

                                            $sql = "SELECT * FROM products where id=18";
                                            $res = mysqli_query($dbc17, $sql) or die( mysqli_error($dbc17));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-Border.php">Borderlands</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,399.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR17.php');
                                        if ($dbc17-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=18 && added='no'" ;
                                            $result = $dbc17-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc17-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-dev.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR18.php";

                                            $sql = "SELECT * FROM products where id=19";
                                            $res = mysqli_query($dbc18, $sql) or die( mysqli_error($dbc18));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-dev.php">Devil May Cry</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 991.90</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR18.php');
                                        if ($dbc18-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=19 && added='no'" ;
                                            $result = $dbc18-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc18-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-ass.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR19.php";

                                            $sql = "SELECT * FROM products where id=20";
                                            $res = mysqli_query($dbc19, $sql) or die( mysqli_error($dbc19));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-ass.php">Assasins Creed</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,200.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR19.php');
                                        if ($dbc19-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=20 && added='no'" ;
                                            $result = $dbc19-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc19-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="adventure-death.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR20.php";

                                            $sql = "SELECT * FROM products where id=21";
                                            $res = mysqli_query($dbc20, $sql) or die( mysqli_error($dbc20));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="adventure-death.php">Death Stranding</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,855.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR20.php');
                                        if ($dbc20-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=21 && added='no'" ;
                                            $result = $dbc20-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc20-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-csgo.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR21.php";

                                            $sql = "SELECT * FROM products where id=22";
                                            $res = mysqli_query($dbc21, $sql) or die( mysqli_error($dbc21));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-csgo.php">Counter Strike</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 790.31</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR21.php');
                                        if ($dbc21-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=22 && added='no'" ;
                                            $result = $dbc21-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc21-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-battle.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR22.php";

                                            $sql = "SELECT * FROM products where id=23";
                                            $res = mysqli_query($dbc22, $sql) or die( mysqli_error($dbc22));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-battle.php">BattleField</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,599.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR22.php');
                                        if ($dbc22-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=23 && added='no'" ;
                                            $result = $dbc22-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc22-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-cry.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR23.php";

                                            $sql = "SELECT * FROM products where id=24";
                                            $res = mysqli_query($dbc23, $sql) or die( mysqli_error($dbc23));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-cry.php">Crysis</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 649.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR23.php');
                                        if ($dbc23-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=24 && added='no'" ;
                                            $result = $dbc23-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc23-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-las.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR24.php";

                                            $sql = "SELECT * FROM products where id=25";
                                            $res = mysqli_query($dbc24, $sql) or die( mysqli_error($dbc24));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-las.php">The Last of Us</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,099.56</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR24.php');
                                        if ($dbc24-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=25 && added='no'" ;
                                            $result = $dbc24-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc24-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-amo.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR25.php";

                                            $sql = "SELECT * FROM products where id=26";
                                            $res = mysqli_query($dbc25, $sql) or die( mysqli_error($dbc25));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-amo.php">Among Us</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 159.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR25.php');
                                        if ($dbc25-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=26 && added='no'" ;
                                            $result = $dbc25-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc25-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-ali.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR26.php";

                                            $sql = "SELECT * FROM products where id=27";
                                            $res = mysqli_query($dbc26, $sql) or die( mysqli_error($dbc26));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-ali.php">Alien: Isolation</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,620.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR26.php');
                                        if ($dbc26-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=27 && added='no'" ;
                                            $result = $dbc26-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc26-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-reb.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR27.php";

                                            $sql = "SELECT * FROM products where id=28";
                                            $res = mysqli_query($dbc27, $sql) or die( mysqli_error($dbc27));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-reb.php">Resident Evil 7 VR</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 995.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR27.php');
                                        if ($dbc27-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=28 && added='no'" ;
                                            $result = $dbc27-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc27-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-rev.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR28.php";

                                            $sql = "SELECT * FROM products where id=29";
                                            $res = mysqli_query($dbc28, $sql) or die( mysqli_error($dbc28));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                          <h3 class="nk-product-title h5"><a href="horror-rev.php">Resident Evil Village</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,650.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR28.php');
                                        if ($dbc28-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=29 && added='no'" ;
                                            $result = $dbc28-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc28-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-ani.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR29.php";

                                            $sql = "SELECT * FROM products where id=30";
                                            $res = mysqli_query($dbc29, $sql) or die( mysqli_error($dbc29));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-ani.php">Animal Crossing: New Horizons</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,119.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR29.php');
                                        if ($dbc29-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=30 && added='no'" ;
                                            $result = $dbc29-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc29-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-cod.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR30.php";

                                            $sql = "SELECT * FROM products where id=31";
                                            $res = mysqli_query($dbc30, $sql) or die( mysqli_error($dbc30));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-cod.php">Call of Duty: Warzone</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 199.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR30.php');
                                        if ($dbc30-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=31 && added='no'" ;
                                            $result = $dbc30-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc30-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-ded.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR31.php";

                                            $sql = "SELECT * FROM products where id=32";
                                            $res = mysqli_query($dbc31, $sql) or die( mysqli_error($dbc31));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-ded.php">Dead Rising</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR31.php');
                                        if ($dbc31-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=32 && added='no'" ;
                                            $result = $dbc31-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc31-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-lit.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR32.php";

                                            $sql = "SELECT * FROM products where id=33";
                                            $res = mysqli_query($dbc32, $sql) or die( mysqli_error($dbc32));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-lit.php">Little Nightmares</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 740.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR32.php');
                                        if ($dbc32-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=33 && added='no'" ;
                                            $result = $dbc32-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc32-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-ham.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR33.php";

                                            $sql = "SELECT * FROM products where id=34";
                                            $res = mysqli_query($dbc33, $sql) or die( mysqli_error($dbc33));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-ham.php">Halo: The Master Chief Collection</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 829.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR33.php');
                                        if ($dbc33-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=34 && added='no'" ;
                                            $result = $dbc33-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc33-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-met.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR34.php";

                                            $sql = "SELECT * FROM products where id=35";
                                            $res = mysqli_query($dbc34, $sql) or die( mysqli_error($dbc34));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-met.php">Metro Exodus</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,117.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR34.php');
                                        if ($dbc34-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=35 && added='no'" ;
                                            $result = $dbc34-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc34-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-evi.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR35.php";

                                            $sql = "SELECT * FROM products where id=36";
                                            $res = mysqli_query($dbc35, $sql) or die( mysqli_error($dbc35));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-evi.php">The Evil Within 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,845.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR35.php');
                                        if ($dbc35-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=36 && added='no'" ;
                                            $result = $dbc35-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc35-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-hai.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR36.php";

                                            $sql = "SELECT * FROM products where id=37";
                                            $res = mysqli_query($dbc36, $sql) or die( mysqli_error($dbc36));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-hai.php">Halo Infinite</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR36.php');
                                        if ($dbc36-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=37 && added='no'" ;
                                            $result = $dbc36-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc36-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-fin.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR37.php";

                                            $sql = "SELECT * FROM products where id=38";
                                            $res = mysqli_query($dbc37, $sql) or die( mysqli_error($dbc37));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-fin.php">Final Fantasy XIV Online</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 784.88</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR37.php');
                                        if ($dbc37-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=38 && added='no'" ;
                                            $result = $dbc37-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc37-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-mar.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR38.php";

                                            $sql = "SELECT * FROM products where id=39";
                                            $res = mysqli_query($dbc38, $sql) or die( mysqli_error($dbc38));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-mar.php">Mario Kart 8</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 944.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR38.php');
                                        if ($dbc38-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=39 && added='no'" ;
                                            $result = $dbc38-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc38-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-spl.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR39.php";

                                            $sql = "SELECT * FROM products where id=40";
                                            $res = mysqli_query($dbc39, $sql) or die( mysqli_error($dbc39));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-spl.php">Splitgate</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR39.php');
                                        if ($dbc39-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=40 && added='no'" ;
                                            $result = $dbc39-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc39-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-sup.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR40.php";

                                            $sql = "SELECT * FROM products where id=41";
                                            $res = mysqli_query($dbc40, $sql) or die( mysqli_error($dbc40));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-sup.php">Super Smash Brothers Ultimate</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 3,138.98</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR40.php');
                                        if ($dbc40-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=41 && added='no'" ;
                                            $result = $dbc40-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc40-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-con.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR41.php";

                                            $sql = "SELECT * FROM products where id=42";
                                            $res = mysqli_query($dbc41, $sql) or die( mysqli_error($dbc41));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-con.php">Condemned: Criminal Origins</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 419.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR41.php');
                                        if ($dbc41-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=42 && added='no'" ;
                                            $result = $dbc41-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc41-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-sys.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR42.php";

                                            $sql = "SELECT * FROM products where id=43";
                                            $res = mysqli_query($dbc42, $sql) or die( mysqli_error($dbc42));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-sys.php">System Shock 2</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 319.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR42.php');
                                        if ($dbc42-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=43 && added='no'" ;
                                            $result = $dbc42-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc42-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-gui.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR43.php";

                                            $sql = "SELECT * FROM products where id=44";
                                            $res = mysqli_query($dbc43, $sql) or die( mysqli_error($dbc43));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-gui.php">Guilty Gear Strive</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,795.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR43.php');
                                        if ($dbc43-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=44 && added='no'" ;
                                            $result = $dbc43-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc43-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-amn.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR44.php";

                                            $sql = "SELECT * FROM products where id=45";
                                            $res = mysqli_query($dbc44, $sql) or die( mysqli_error($dbc44));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-amn.php">Amnesia: The Dark Descent</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR44.php');
                                        if ($dbc44-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=45 && added='no'" ;
                                            $result = $dbc44-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc44-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action adventure fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-rai.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR45.php";

                                            $sql = "SELECT * FROM products where id=46";
                                            $res = mysqli_query($dbc45, $sql) or die( mysqli_error($dbc45));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-rai.php">Rainbow Six: Seige</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 750.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR45.php');
                                        if ($dbc45-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=46 && added='no'" ;
                                            $result = $dbc45-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc45-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv horror">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="horror-out.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR46.php";

                                            $sql = "SELECT * FROM products where id=47";
                                            $res = mysqli_query($dbc46, $sql) or die( mysqli_error($dbc46));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="horror-out.php">The Outlast</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">FREE</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR46.php');
                                        if ($dbc46-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=47 && added='no'" ;
                                            $result = $dbc46-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc46-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv multiplayer">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="multi-fal.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR47.php";

                                            $sql = "SELECT * FROM products where id=48";
                                            $res = mysqli_query($dbc47, $sql) or die( mysqli_error($dbc47));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="multi-fal.php">Fall Guys</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 499.95</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR47.php');
                                        if ($dbc47-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=48 && added='no'" ;
                                            $result = $dbc47-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc47-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv action fps">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="fps-battle.php">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR48.php";

                                            $sql = "SELECT * FROM products where id=49";
                                            $res = mysqli_query($dbc48, $sql) or die( mysqli_error($dbc48));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="fps-battle.php">Battlefield</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 2,599.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR48.php');
                                        if ($dbc48-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=49 && added='no'" ;
                                            $result = $dbc48-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc48-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR49.php";

                                            $sql = "SELECT * FROM products where id=50";
                                            $res = mysqli_query($dbc49, $sql) or die( mysqli_error($dbc49));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="">Far Cry Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,179.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR49.php');
                                        if ($dbc49-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=50 && added='no'" ;
                                            $result = $dbc49-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc49-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR50.php";

                                            $sql = "SELECT * FROM products where id=51";
                                            $res = mysqli_query($dbc50, $sql) or die( mysqli_error($dbc50));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="">Resident Evil Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,149.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR50.php');
                                        if ($dbc50-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=51 && added='no'" ;
                                            $result = $dbc50-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc50-> close();?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 filterDiv bundle">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="">
                                        <?php
                                            include "other_connectors/DB_CONNECTOR51.php";

                                            $sql = "SELECT * FROM products where id=52";
                                            $res = mysqli_query($dbc51, $sql) or die( mysqli_error($dbc51));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?>
                                        <img src="<?php echo $image; ?>" alt="Red Dead">

                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="">Forza Horizon Bundle</a></h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">₱ 1,139.00</div>
                                        <div class="nk-gap-1"></div>
                                        <?php
                                        require_once('other_connectors/DB_CONNECTOR51.php');
                                        if ($dbc51-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=52 && added='no'" ;
                                            $result = $dbc51-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='loggedin_browse_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc51-> close();?>
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
                        <a href="store-product.php" class="nk-post-image">
                            <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.php">So saying he unbuckled</a></h3>
                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                        <div class="nk-product-price">€ 23.00</div>
                    </div>

                    <div class="nk-widget-post">
                        <a href="store-product.php" class="nk-post-image">
                            <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.php">However, I have reason</a></h3>
                        <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                        <div class="nk-product-price">€ 32.00</div>
                    </div>

                    <div class="nk-widget-post">
                        <a href="store-product.php" class="nk-post-image">
                            <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                        </a>
                        <h3 class="nk-post-title"><a href="store-product.php">It was some time before</a></h3>
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
