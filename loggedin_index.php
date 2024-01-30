<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Gaming Spot One Stop Game Shop</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <script src="https://kit.fontawesome.com/f30943045c.js" crossorigin="anonymous"></script>
      
      <link rel="icon" type="image/png" href="assets/images/logo.png">

      <link rel="stylesheet" href="assets/css/goodgames.css">
      <link rel="stylesheet" href="assets/css/lightslider.css">
      <script src="assets/js/JQuery3.3.1.js"></script>
      <script src="assets/js/lightslider.js"></script>

<style type="text/css">
body {
    background-image: url('assets/images/bg-bg-bg.png');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
}
</style>
    </head>

                                               
<!-- START OF BODY -->
    <body>                                           

    <!-- NAV BAR1-->     
    <nav class="navbar navbar-expand-md" style="background-color: #121111;">
        <a href="loggedin_index.php"><img src ="assets/images/logo.png" alt="logo" width="40px">
        <a class="nav-link" href="loggedin_index.php">Store</a>

    
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><img src ="assets/images/profile.png" alt="logo" width="40px"></a></li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><img src ="assets/images/cart.png" alt="logo" width="40px"></a></li>
            </ul>
        </div>
      </nav>                                        
     <!--END OF NAVBAR -->    
     

<!-- NAV BAR2-->     
    <div class="content">                                                 
        <a class="nav2-link" href="loggedin_index.php">Discover</a>
        <a class="nav3-link" href="loggedin_browse.php">Browse</a></div> 
<!-- END OF NAV BAR2--> 


<!-- SLIDE FRAME --> 
            <div class="container">          
                <div class="slider-frame">
                    <div class="slide-images">
                        <div class="img-container">
                            <img src="assets/images/assassins_slides.png"></div>
                        <div class="img-container">
                            <img src="assets/images/outlast_slides.png"></div>
                        <div class="img-container">
                            <img src="assets/images/borderlands_slides.png"></div>
                        <div class="img-container">
                            <img src="assets/images/fallguys_slides.png"></div>
                        <div class="img-container">
                            <img src="assets/images/merchandise_slides.png"></div>
                    </div>                              
                </div>                              
            </div>                              
<!-- END OF SLIDE FRAME --> 


<!-- SLIDE FRAME SIDEBAR --> 
            <div class="right-navbar">
                <ul class="sidebar">
                
            <!-- slide frame sidebar 1 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/assassin_sidebar.jpg">
                            <div class="side-icon-text-side">
                                <h6>Assasin's Creed Valhalla</h6></div>
                        </div></li>
            <!-- slide frame sidebar 2 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/outlast_sidebar.jpg">
                            <div class="side-icon-text-side">
                                <h6>The Outlast</h6></div>
                        </div></li>
            <!-- slide frame sidebar 3 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/borderlands_sidebar.jpg">
                            <div class="side-icon-text-side">
                                <h6>Borderlands 3</h6></div>
                        </div></li>
            <!-- slide frame sidebar 4 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/fallguys_sidebar.jpg">
                            <div class="side-icon-text-side">
                                <h6>Fall Guys</h6></div>
                        </div></li>
            <!-- slide frame sidebar 5 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/merch.png">
                            <div class="side-icon-text-side">
                                <h6>Merchandise</h6></div>
                        </div></li>
                    </ul>
            </div>
<!-- END OF SLIDE FRAME SIDEBAR --> 


<!-- MOST POPULAR NOW GAMES --> 
            <section id="main">                         
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">MOST</span> POPULAR NOW</span></h3>
                <ul id="autoWidth" class="cs-hidden">
            
            <!-- most popular games 1 --> 
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="multi-cod.php">
                            <img src="assets/images/call-ofduty_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Call of Duty</h5>
                                <p>₱ 199.00</p></div>
                        </div></li>
            <!-- most popular games 2 --> 
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="adventure-tomb.php">
                            <img src="assets/images/tomb-raider_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Tomb Raider</h5>
                                <p>₱ 589.99</p></div>
                        </div></li>
            <!-- most popular games 3 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="horror-lit.php">
                            <img src="assets/images/little-nightmares_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Little Nightmares</h5>
                                <p>₱ 740.00</p></div>
                    </div></li>
            <!-- most popular games 4 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="multi-mar.php">
                            <img src="assets/images/mario-kart_popular.png"></a>
                            <div class="showcase-text">
                                <h5>Mario Kart 8</h5>
                                <p>₱ 944.00</p></div>
                    </div></li>
            <!-- most popular games 5 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="fps-valo.php">
                            <img src="assets/images/valorant_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Valorant</h5>
                                <p>FREE</p></div>
                    </div></li>
            <!-- most popular games 6 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="horror-las.php">
                            <img src="assets/images/last-ofus_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>The Last of Us</h5>
                                <p>₱ 1,009.56</p></div>
                    </div></li>
            <!-- most popular games 7 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="adventure-GTA.php">
                            <img src="assets/images/gta-v_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Grand Theft Auto V</h5>
                                <p>FREE</p></div>
                    </div></li>
            <!-- most popular games 8 -->
                <li class="item-a">
                        <div class="showcase-box">
                            <a href="multi-amo.php">
                            <img src="assets/images/among-us_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Among Us</h5>
                                <p>₱ 159.95</p></div>
                    </div></li>
            <!-- most popular games 9 -->
                <li class="item-a">
                        <div class="showcase-box">
                            <a href="adventure-unchar.php">
                            <img src="assets/images/uncharted_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Uncharted 4</h5>
                                <p>₱ 1,999.95</p></div>
                    </div></li>
            <!-- most popular games 10 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <a href="multi-fin.php">
                            <img src="assets/images/final-fantasy_popular.jpg"></a>
                            <div class="showcase-text">
                                <h5>Final Fantasy XIV</h5>
                                <p>₱ 784.88</p></div>
                    </div></li>
                </ul>                                       
            </section>                                      
<!-- END OF MOST POPULAR NOW GAMES --> 


<!-- FREE GAMES --> 
            <div class="free-game">
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">FREE</span> GAMES</span></h3>

            <!-- free games 1 -->
                <div class="free-game-box">
                    <a href="adventure-ittakes.php">
                    <img src="assets/images/it-takes_free.jpg"></a>
                    <div class="free-game-text">
                        <h5>It Takes Two</h5>
                        <p>FREE NOW - June 06 at 9:00 PM</p></div>
                </div>
            <!-- free games 2 -->
                <div class="free-game-box2">
                    <a href="horror-ded.php">
                    <img src="assets/images/dead-rising_free.jpg"></a>
                    <div class="free-game-text2">
                        <h5>Dead Rising 3</h5>
                        <p>FREE NOW - June 06 at 8:30 PM</p></div>
                </div>
            </div>
<!-- END OF FREE GAMES --> 


<!-- BUNDLE GAMES --> 
            <div class="other-game-section">
                
<!-- FARCRY BUNDLE GAMES --> 
        <ul class="new-Games">
        
            <!-- bundle games farcry -->
                    <li class="item-a">
                        <h4>Far Cry Bundle</h4>
                    <div class="side-icon">
                            <img src="assets/images/farcry3_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Far Cry 3</h6></div>
                        </div></li>
            <!-- farcry 1 bundle -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/farcry5_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Far Cry 5</h6></div>
                        </div></li>
            <!-- farcry 2 bundle -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/farcry6_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Far Cry 6</h6></div>
                        </div></li>
            <!-- farcry 3 bundle -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/farcry-primal_bundle.jpg">                            
                            <div class="side-icon-text">
                                <h6>Far Cry Primal</h6></div>
                        </div></li>
                    </ul> 
<!-- END OF FARCRY BUNDLE GAMES --> 


<!-- RESIDENT EVIL BUNDLE GAMES --> 
        <ul class="top-sellers-games">

            <!-- bundle games resident evil 1 -->        
                <li class="item-a">
                        <h4>Resident Evil Bundle</h4>
                        <div class="side-icon">
                            <img src="assets/images/res-evil2_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Resident Evil 2 Remake</h6></div>
                        </div></li>
            <!-- bundle games resident evil 2 --> 
                <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/res-evil3_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Resident Evil 3 Remake</h6></div>
                        </div></li>
            <!-- bundle games resident evil 3 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/res-evil7_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Resident Evil 7</h6></div>
                        </div></li>
            <!-- bundle games resident evil 4 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/res-evil-village_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Resident Evil Village</h6></div>
                        </div></li>
                    </ul>
<!-- END OF RESIDENT EVIL BUNDLE GAMES -->


<!-- FORZA HORIZON BUNDLE GAMES -->
                <ul class="coming-soon-games">

            <!-- bundle forza horizon bundle 1 --> 
                    <li class="item-a">
                        <h4>Forza Horizon Bundle</h4>
                        <div class="side-icon">
                            <img src="assets/images/forza2_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Forza Horizon 2</h6></div>
                        </div></li>
            <!-- bundle forza horizon bundle 2 -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/forza3_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Forza Horizon 3</h6></div>
                        </div></li>
            <!-- bundle forza horizon bundle 3 -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/forza4_bundle.jpg">
                            <div class="side-icon-text">
                                <h6>Forza Horizon 4</h6></div>
                        </div></li>
            <!-- bundle forza horizon bundle 4 -->
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/forza5_bundle.jpg">                          
                            <div class="side-icon-text">
                                <h6>Forza Horizon 5</h6></div>
                        </div></li>
                    </ul>

                </div>      <!-- END OF BUNDLE GAMES -->
<!-- END OF FORZA HORIZON BUNDLE GAMES -->

<!-- MOST POPULAR NOW GAMES --> 
<section id="main2">                         
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">NEW</span> TO THE GAME SPOT ONE STOP</span></h3>
    <ul id="autoWidth2" class="cs-hidden">

<!-- most popular games 1 --> 
        <li class="item-a">
            <div class="new-game-box">
                <a href="fps-apex.php">
                <img src="assets/images/apex-legends_new.jpg"></a>
                <div class="new-game-text">
                    <p>Apex Legends</p></div>
            </div></li>
<!-- most popular games 2 --> 
        <li class="item-a">
            <div class="new-game-box">
                <a href="fps-farc.php">
                <img src="assets/images/farcry_new.jpg"></a>
                <div class="new-game-text">
                    <p>Far Cry 6</p></div>
            </div></li>
<!-- most popular games 3 -->
        <li class="item-a">
            <div class="new-game-box">
                <a href="horror-sys.php">
                <img src="assets/images/system-shock_new.jpg"></a>
                <div class="new-game-text">
                    <p>System Shock 2</p></div>
        </div></li>
<!-- most popular games 4 -->
        <li class="item-a">
            <div class="new-game-box">
                <a href="multi-sup.php">
                <img src="assets/images/super-smashbros_new.jpg"></a>
                <div class="new-game-text">
                    <p>Super Smash Bros Ultimate</p></div>
        </div></li>
    </ul>                                       
</section>                                      
<!-- END OF MOST POPULAR NOW GAMES --> 




<!-- CATALOG -->
                <div class="catalog">
                    <div class="catalog-box">
                        <img src="assets/images/catalogg.png">
                        <div class="catalog-text">
                            <h5>Explore Our Catalog</h5>
                            <p>Browse by genre, features, price, and more <br> to find your next favorite game.</p>
                        </div>
                    </div>
                    </div>
                        
                <div class="btn-collection-playing my-4">
                    <a href="browse.php">
                    <button class="btn btn-custom">LEARN MORE</button></a></div>
<!-- END OF CATALOG -->
        



<!-- SLIDER SCRIPT -->
            <script>                                                    
                $(document).ready(function() {
                    $('#autoWidth, #autoWidth2').lightSlider( {
                        autoWidth:true, loop:true, onSliderLoad: function() {
                            $('#autoWidth').removeClass('.cs-hidden');
                        }
                    });
                });
            </script>                                                      
<!-- END OF SLIDER SCRIPT -->

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
