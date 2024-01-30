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
      <link rel="stylesheet" type="text/css" href="assets/css/merch.css">
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
                            <img src="assets/images/funko-pop_slide.png"></div>
                        <div class="img-container">
                            <img src="assets/images/accessories_slide.png"></div>
                        <div class="img-container">
                            <img src="assets/images/peripherals_slide.png"></div>
                        <div class="img-container">
                            <img src="assets/images/game-clothing_slide.png"></div>
                        <div class="img-container">
                            <img src="assets/images/package-deals_slide.png"></div>
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
                            <img src="assets/images/funko_valorant.png">
                            <div class="side-icon-text">
                                <h6>Funko Pop</h6></div>
                        </div></li>
            <!-- slide frame sidebar 2 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/acce_xbox.png">
                            <div class="side-icon-text">
                                <h6>Accessories</h6></div>
                        </div></li>
            <!-- slide frame sidebar 3 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/periph_drive.png">
                            <div class="side-icon-text">
                                <h6>Peripherals</h6></div>
                        </div></li>
            <!-- slide frame sidebar 4 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src="assets/images/merch_apex.png">
                            <div class="side-icon-text">
                                <h6>Game Clothing</h6></div>
                        </div></li>
            <!-- slide frame sidebar 5 --> 
                    <li class="item-a">
                        <div class="side-icon">
                            <img src=" assets/images/package_1.png">
                            <div class="side-icon-text">
                                <h6>Package Deals</h6></div>
                        </div></li>
                    </ul>
            </div>
<!-- END OF SLIDE FRAME SIDEBAR --> 

<!-- MOST POPULAR NOW GAMES --> 
            <section id="main">                         
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">FUNKO</span> POP</span></h3>
                <ul id="autoWidth" class="cs-hidden">
            
            <!-- most popular games 1 --> 
                    <li class="item-a">
                        <div class="showcase-box">
                        <?php
                                            include "MDB_CONNECTOR.php";

                                            $sql = "SELECT * FROM products where id=53";
                                            $res = mysqli_query($dbc, $sql) or die( mysqli_error($dbc));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Sage</h5>
                                <?php
                                        require_once('MDB_CONNECTOR.php');
                                        if ($dbc-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=53 && added='no'" ;
                                            $result = $dbc-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc-> close();?>
                                <p style="margin-right: 30px;"> ₱ 649.00</p></div>
                        </div></li>
            <!-- most popular games 2 --> 
                    <li class="item-a">
                        <div class="showcase-box">
                        <?php
                                            include "other_connectors/MDB_CONNECTOR1.php";

                                            $sql = "SELECT * FROM products where id=54";
                                            $res = mysqli_query($dbc1, $sql) or die( mysqli_error($dbc1));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Gibraltar</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR1.php');
                                        if ($dbc1-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=54 && added='no'" ;
                                            $result = $dbc1-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc1-> close();?>
                                <p style="margin-right: 30px;">₱ 749.00</p></div>
                        </div></li>
            <!-- most popular games 3 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR2.php";

                                            $sql = "SELECT * FROM products where id=55";
                                            $res = mysqli_query($dbc2, $sql) or die( mysqli_error($dbc2));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Pikachu</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR2.php');
                                        if ($dbc2-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=55 && added='no'" ;
                                            $result = $dbc2-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc2-> close();?>
                               <p style="margin-right: 30px;">₱ 849.00</p></div>
                    </div></li>
            <!-- most popular games 4 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR3.php";

                                            $sql = "SELECT * FROM products where id=56";
                                            $res = mysqli_query($dbc3, $sql) or die( mysqli_error($dbc3));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Lilith</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR3.php');
                                        if ($dbc3-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=56 && added='no'" ;
                                            $result = $dbc3-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc3-> close();?>
                                <p style="margin-right: 30px;">₱ 649.00</p></div>
                    </div></li>
            <!-- most popular games 5 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR4.php";

                                            $sql = "SELECT * FROM products where id=57";
                                            $res = mysqli_query($dbc4, $sql) or die( mysqli_error($dbc4));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Leon Kennedy</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR4.php');
                                        if ($dbc4-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=57 && added='no'" ;
                                            $result = $dbc4-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc4-> close();?>
                                <p style="margin-right: 30px;">₱ 749.00</p></div>
                    </div></li>
            <!-- most popular games 6 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR5.php";

                                            $sql = "SELECT * FROM products where id=58";
                                            $res = mysqli_query($dbc5, $sql) or die( mysqli_error($dbc5));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Naruto</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR5.php');
                                        if ($dbc5-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=58 && added='no'" ;
                                            $result = $dbc5-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc5-> close();?> 
                                <p style="margin-right: 30px;">₱ 849.00</p></div>
                    </div></li>
            <!-- most popular games 7 -->
                    <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR6.php";

                                            $sql = "SELECT * FROM products where id=59";
                                            $res = mysqli_query($dbc6, $sql) or die( mysqli_error($dbc6));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Mario</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR6.php');
                                        if ($dbc6-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=59 && added='no'" ;
                                            $result = $dbc6-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc6-> close();?>
                                <p style="margin-right: 30px;">₱ 849.00</p></div>
                    </div></li>
            <!-- most popular games 8 -->
                <li class="item-a">
                        <div class="showcase-box">
                            <?php
                                            include "other_connectors/MDB_CONNECTOR7.php";

                                            $sql = "SELECT * FROM products where id=60";
                                            $res = mysqli_query($dbc7, $sql) or die( mysqli_error($dbc7));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                            <div class="showcase-text">
                                <h5>Funko Pop Valhalla</h5>
                                <?php
                                        require_once('other_connectors/MDB_CONNECTOR7.php');
                                        if ($dbc7-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=60 && added='no'" ;
                                            $result = $dbc7-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc7-> close();?>
                                <p style="margin-right: 30px;">₱ 749.00</p></div>
                    </div></li>
            
                </ul>                                       
            </section>                                      
<!-- END OF MOST POPULAR NOW GAMES --> 

<!-- PERIPHERALS --> 
            <section id="main">                         
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">ACCE</span>SSORIES</span></h3>
                <ul id="autoWidth2" class="cs-hidden">

<!-- most popular games 1 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR8.php";

                                            $sql = "SELECT * FROM products where id=61";
                                            $res = mysqli_query($dbc8, $sql) or die( mysqli_error($dbc8));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Overdrive Racing Wheel</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR8.php');
                                        if ($dbc8-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=61 && added='no'" ;
                                            $result = $dbc8-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc8-> close();?>
                        <p style="margin-right: 10px;">₱ 7,242.20</p></div>
                </div></li>
<!-- most popular games 2 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR9.php";

                                            $sql = "SELECT * FROM products where id=62";
                                            $res = mysqli_query($dbc9, $sql) or die( mysqli_error($dbc9));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Elite Series 2 Controller</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR9.php');
                                        if ($dbc9-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=62 && added='no'" ;
                                            $result = $dbc9-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc9-> close();?>
                        <p style="margin-right: 10px;">₱ 9,629.72</p></div>
                </div></li>
<!-- most popular games 3 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR10.php";

                                            $sql = "SELECT * FROM products where id=63";
                                            $res = mysqli_query($dbc10, $sql) or die( mysqli_error($dbc10));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>LED Headphone Stand</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR10.php');
                                        if ($dbc10-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=63 && added='no'" ;
                                            $result = $dbc10-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc10-> close();?>
                        <p style="margin-right: 10px;">₱ 1,310.46</p></div>
                </div></li>
<!-- most popular games 4 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR11.php";

                                            $sql = "SELECT * FROM products where id=64";
                                            $res = mysqli_query($dbc11, $sql) or die( mysqli_error($dbc11));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Monitor Mount</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR11.php');
                                        if ($dbc11-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=64 && added='no'" ;
                                            $result = $dbc11-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc11-> close();?>
                        <p style="margin-right: 10px;">₱ 6,850.00</p></div>
                    </div></li>
<!-- most popular games 5 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR12.php";

                                            $sql = "SELECT * FROM products where id=65";
                                            $res = mysqli_query($dbc12, $sql) or die( mysqli_error($dbc12));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Mobile Game Controller</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR12.php');
                                        if ($dbc12-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=65 && added='no'" ;
                                            $result = $dbc12-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc12-> close();?>
                        <p style="margin-right: 10px;">₱ 3, 036.65</p></div>
                    </div></li>
<!-- most popular games 6 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR13.php";

                                            $sql = "SELECT * FROM products where id=66";
                                            $res = mysqli_query($dbc13, $sql) or die( mysqli_error($dbc13));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Monitor Light Bar</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR13.php');
                                        if ($dbc13-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=66 && added='no'" ;
                                            $result = $dbc13-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc13-> close();?>
                        <p style="margin-right: 10px;">₱ 1,299.00</p></div>
                </div></li>
<!-- most popular games 7 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR14.php";

                                            $sql = "SELECT * FROM products where id=67";
                                            $res = mysqli_query($dbc14, $sql) or die( mysqli_error($dbc14));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>SteelSeries Gaming Pad</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR14.php');
                                        if ($dbc14-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=67 && added='no'" ;
                                            $result = $dbc14-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc14-> close();?>
                        <p style="margin-right: 10px;">₱ 886.36</p></div>
                </div></li>
<!-- most popular games 8 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR15.php";

                                            $sql = "SELECT * FROM products where id=68";
                                            $res = mysqli_query($dbc15, $sql) or die( mysqli_error($dbc15));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Gaming Massage Chair</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR15.php');
                                        if ($dbc15-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=68 && added='no'" ;
                                            $result = $dbc15-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc15-> close();?>
                        <p style="margin-right: 30px;">₱ 7,899.00</p></div>
                </div></li>

            </ul>                                       
        </section>                                      
<!-- END OF PERIPHERALS --> 


<!-- ACCESSORIES --> 
<section id="main">                         
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">PERIP</span>HERALS</span></h3>
    <ul id="autoWidth3" class="cs-hidden">

<!-- most popular games 1 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR16.php";

                                            $sql = "SELECT * FROM products where id=69";
                                            $res = mysqli_query($dbc16, $sql) or die( mysqli_error($dbc16));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Toshiba 2TB HDD</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR16.php');
                                        if ($dbc16-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=69 && added='no'" ;
                                            $result = $dbc16-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc16-> close();?>
                        <p style="margin-right: 10px;">₱ 2,728.00</p></div>
                </div></li>
<!-- most popular games 2 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR17.php";

                                            $sql = "SELECT * FROM products where id=70";
                                            $res = mysqli_query($dbc17, $sql) or die( mysqli_error($dbc17));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Logitech Z213</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR17.php');
                                        if ($dbc17-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=70 && added='no'" ;
                                            $result = $dbc17-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc17-> close();?>
                        <p style="margin-right: 10px;">₱ 2,621.88</p></div>
                </div></li>
<!-- most popular games 3 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR18.php";

                                            $sql = "SELECT * FROM products where id=71";
                                            $res = mysqli_query($dbc18, $sql) or die( mysqli_error($dbc18));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Red Dragon Kumara k552</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR18.php');
                                        if ($dbc18-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=71 && added='no'" ;
                                            $result = $dbc18-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc18-> close();?>
                        <p style="margin-right: 10px;">₱ 2,087.93</p></div>
            </div></li>
<!-- most popular games 4 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR19.php";

                                            $sql = "SELECT * FROM products where id=72";
                                            $res = mysqli_query($dbc19, $sql) or die( mysqli_error($dbc19));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Seiren Mini Microphone</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR19.php');
                                        if ($dbc19-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=72 && added='no'" ;
                                            $result = $dbc19-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc19-> close();?>
                        <p style="margin-right: 10px;">₱ 1,799.00</p></div>
            </div></li>
<!-- most popular games 5 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR20.php";

                                            $sql = "SELECT * FROM products where id=73";
                                            $res = mysqli_query($dbc20, $sql) or die( mysqli_error($dbc20));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Corsair HS80</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR20.php');
                                        if ($dbc20-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=73 && added='no'" ;
                                            $result = $dbc20-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc20-> close();?>
                        <p style="margin-right: 10px;">₱ 3,972.00</p></div>
                </div></li>
<!-- most popular games 6 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR21.php";

                                            $sql = "SELECT * FROM products where id=74";
                                            $res = mysqli_query($dbc21, $sql) or die( mysqli_error($dbc21));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Logitech C920</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR21.php');
                                        if ($dbc21-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=74 && added='no'" ;
                                            $result = $dbc21-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc21-> close();?>
                        <p style="margin-right: 10px;">₱ 3,320.00</p></div>
                </div></li>
<!-- most popular games 7 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR22.php";

                                            $sql = "SELECT * FROM products where id=75";
                                            $res = mysqli_query($dbc22, $sql) or die( mysqli_error($dbc22));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Logitech G102</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR22.php');
                                        if ($dbc22-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=75 && added='no'" ;
                                            $result = $dbc22-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc22-> close();?>
                        <p style="margin-right: 10px;">₱ 1,468.75</p></div>
                </div></li>
<!-- most popular games 8 -->
        <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR23.php";

                                            $sql = "SELECT * FROM products where id=76";
                                            $res = mysqli_query($dbc23, $sql) or die( mysqli_error($dbc23));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>ASUS  VP249QGR</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR23.php');
                                        if ($dbc23-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=76 && added='no'" ;
                                            $result = $dbc23-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc23-> close();?>
                        <p style="margin-right: 10px;">₱ 11,650.00</p></div>
                </div></li>
            </ul>                                       
        </section>                                      
<!-- END OF ACCESSORIES --> 

<!-- ACCESSORIES --> 
<section id="main">                         
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">GAME</span> CLOTHING</span></h3>
    <ul id="autoWidth3" class="cs-hidden">

<!-- most popular games 1 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR24.php";

                                            $sql = "SELECT * FROM products where id=77";
                                            $res = mysqli_query($dbc24, $sql) or die( mysqli_error($dbc24));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Little Nightmares T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR24.php');
                                        if ($dbc24-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=77 && added='no'" ;
                                            $result = $dbc24-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc24-> close();?>
                        <p style="margin-right: 10px;">₱ 1,330.20</p></div>
                </div></li>
<!-- most popular games 2 --> 
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR25.php";

                                            $sql = "SELECT * FROM products where id=78";
                                            $res = mysqli_query($dbc25, $sql) or die( mysqli_error($dbc25));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Among Us T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR25.php');
                                        if ($dbc25-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=78 && added='no'" ;
                                            $result = $dbc25-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc25-> close();?>
                        <p style="margin-right: 10px;">₱ 1,200.11</p></div>
                </div></li>
<!-- most popular games 3 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR26.php";

                                            $sql = "SELECT * FROM products where id=79";
                                            $res = mysqli_query($dbc26, $sql) or die( mysqli_error($dbc26));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Apex Legends T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR26.php');
                                        if ($dbc26-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=79 && added='no'" ;
                                            $result = $dbc26-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc26-> close();?>
                        <p style="margin-right: 10px;">₱ 1,249.94</p></div>
            </div></li>
<!-- most popular games 4 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR27.php";

                                            $sql = "SELECT * FROM products where id=80";
                                            $res = mysqli_query($dbc27, $sql) or die( mysqli_error($dbc27));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Resident Evil T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR27.php');
                                        if ($dbc27-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=80 && added='no'" ;
                                            $result = $dbc27-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc27-> close();?>
                        <p style="margin-right: 10px;">₱ 1,300.30</p></div>
            </div></li>
<!-- most popular games 5 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR28.php";

                                            $sql = "SELECT * FROM products where id=81";
                                            $res = mysqli_query($dbc28, $sql) or die( mysqli_error($dbc28));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Grand Theft Auto T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR28.php');
                                        if ($dbc28-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=81 && added='no'" ;
                                            $result = $dbc28-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc28-> close();?>
                        <p style="margin-right: 10px;">₱ 1,350.13</p></div>
                </div></li>
<!-- most popular games 6 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR29.php";

                                            $sql = "SELECT * FROM products where id=82";
                                            $res = mysqli_query($dbc29, $sql) or die( mysqli_error($dbc29));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Evil Within T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR29.php');
                                        if ($dbc29-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=82 && added='no'" ;
                                            $result = $dbc29-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc29-> close();?>
                        <p style="margin-right: 10px;">₱ 1,335.44</p></div>
                </div></li>
<!-- most popular games 7 -->
            <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR30.php";

                                            $sql = "SELECT * FROM products where id=83";
                                            $res = mysqli_query($dbc30, $sql) or die( mysqli_error($dbc30));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Mario Mushroom T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR30.php');
                                        if ($dbc30-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=83 && added='no'" ;
                                            $result = $dbc30-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc30-> close();?>
                        <p style="margin-right: 10px;">₱ 1,147.66</p></div>
                </div></li>
<!-- most popular games 8 -->
        <li class="item-a">
                <div class="showcase-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR31.php";

                                            $sql = "SELECT * FROM products where id=84";
                                            $res = mysqli_query($dbc31, $sql) or die( mysqli_error($dbc31));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="showcase-text1">
                        <h5>Left 4 Dead T-Shirt</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR31.php');
                                        if ($dbc31-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=84 && added='no'" ;
                                            $result = $dbc31-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc31-> close();?>
                        <p style="margin-right: 10px;">₱ 1,206.41</p></div>
                </div></li>
            </ul>                                       
        </section>                                      
<!-- END OF ACCESSORIES -->



<!-- FREE GAMES --> 
            <div class="free-game">
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">PACKAGE</span> DEALS</span></h3>

            <!-- free games 1 -->
                <div class="free-game-box">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR32.php";

                                            $sql = "SELECT * FROM products where id=85";
                                            $res = mysqli_query($dbc32, $sql) or die( mysqli_error($dbc32));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="free-game-text">
                        <h5>Package Deal 1</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR32.php');
                                        if ($dbc32-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=85 && added='no'" ;
                                            $result = $dbc32-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc32-> close();?>
                    <p style="margin-left: 160px;">₱ 18,892.00</p></div>
                </div>
            <!-- free games 2 -->
                <div class="free-game-box2">
                    <?php
                                            include "other_connectors/MDB_CONNECTOR33.php";

                                            $sql = "SELECT * FROM products where id=86";
                                            $res = mysqli_query($dbc33, $sql) or die( mysqli_error($dbc33));

                                            while($row=mysqli_fetch_array($res))
                                            {
                                              $image=$row["image"];
                                            }

                                                        ?> 
                                        <img src="<?php echo $image; ?>" alt="SAGE">
                    <div class="free-game-text2">
                        <h5>Package Deal 2</h5>
                        <?php
                                        require_once('other_connectors/MDB_CONNECTOR33.php');
                                        if ($dbc33-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                            }

                                            $sql = "SELECT id, image, title, price from products where id=86 && added='no'" ;
                                            $result = $dbc33-> query($sql);

                                            if($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){

                                            $add = "Add";
                                            $Id = $row["id"];

                                            echo 
                                            "<a href='merch_handler.php?id=$Id&action=$add'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Add To Cart'></input>".
                                            "</a>";
                                            }
                                            echo "</table>";
                                              }
                                              else {
                                             echo "<a href='cart.php'>".
                                            "<input type='button' class='nk-btn nk-btn-rounded nk-btn-color-main-1' name='add' value='Added To Cart'></input>".
                                            "</a>";
                                              }
                                              $dbc33-> close();?>
                        <p style="margin-left: 160px;">₱ 23,000.00</p>
                </div>
            </div>
            </div>
<!-- END OF FREE GAMES --> 


<!-- SLIDER SCRIPT -->
            <script>                                                    
                $(document).ready(function() {
                    $('#autoWidth, #autoWidth2, #autoWidth3').lightSlider( {
                        autoWidth:true, loop:true, onSliderLoad: function() {
                            $('#autoWidth, #autoWidth2, #autoWidth3').removeClass('.cs-hidden');
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

