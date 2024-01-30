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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
  /* position: absolute; */
  border-collapse: collapse;
  margin-top: 60px;
  margin-left: -10px;
  width: 70%;
}

.quantity{
  width: 20px;
}

.cart th, td {
  text-align: left;
  padding: 8px;
  padding-bottom: 10px;
  border-bottom: 1px solid #ddd;
  background: #121111;
}
.cart th {
  background-color: #121111;
  color: white;
}
.total{
  font-size: 20px;
  margin-left: 650px;
  margin-top: -30px;
}
.book{
    background-color: #393e46;
    color: white;
    text-align: center;
    padding: 10px;
    width: 100%;
    border-radius: 20px;
    transition: transform 0.5s;
}
.booker{
  margin-left: 890px;
  margin-top: 30px;
  background-color: #393e46;
  border: #393e46;
  color: white;
  text-align: center;
  padding: 10px;
  width: 20%;
  border-radius: 10px;
  transition: transform 0.5s;
}

.booker:hover {
  transform: scale(.8);
  background: #dd163b;
}
</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Button HTML (to Trigger Modal) -->

          <style>
            .modal-confirm {
              color: #636363;
              width: 400px;
              margin: 30px auto;
            }
            .modal-confirm .modal-content {
              padding: 20px;
              border-radius: 5px;
              border: none;
                  text-align: center;
              font-size: 14px;
            }
            .modal-confirm .modal-header {
              border-bottom: none;
                  position: relative;
            }
            .modal-confirm h4 {
              text-align: center;
              font-size: 26px;
              margin: 30px 0 -10px;
            }
            .modal-confirm .close {
                  position: absolute;
              top: -5px;
              right: -2px;
            }
            .modal-confirm .modal-body {
              color: #999;
            }
            .modal-confirm .modal-footer {
              border: none;
              text-align: center;
              border-radius: 5px;
              font-size: 13px;
              padding: 10px 15px 25px;
            }
            .modal-confirm .modal-footer a {
              color: #fff;
            }
            input .mc_pointer{
              background: transparent;
            }
            .modal-confirm .icon-box {
              width: 80px;
              height: 80px;
              margin: 0 auto;
              border-radius: 50%;
              z-index: 9;
              text-align: center;
              border: 3px solid #f15e5e;
            }
            .modal-confirm .icon-box i {
              color: #f15e5e;
              font-size: 46px;
              display: inline-block;
              margin-top: 13px;
            }
              .modal-confirm .btn {
                  border-radius: 4px;
              background: #60c7c1;
              text-decoration: none;
              transition: all 0.4s;
                  line-height: normal;
              min-width: 120px;
                  border: none;
              min-height: 40px;
              border-radius: 3px;
              margin: 0 5px;
              outline: none !important;
              }
            .modal-confirm .btn-info {
                  background: #595959;
                  width: 100px;
              }
              .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
                  background: #595959;
              }
              .modal-confirm .btn-danger {
                  background: #dd163b;
                  width: 100px;
              }
              .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
                  background: #dd163b;
              }
            .trigger-btn {
              display: inline-block;
              margin: 100px auto;
            }
          </style>
    </head>



  <body>

                                        <!--------------------     NAVBAR     -------------------->

  <nav class="navbar navbar-expand-md" style="background-color: #121111;">
    <a href="loggedin_index.php"><img src ="assets/images/logo.png" alt="logo" width="40px">
    <a class="nav-link" href="loggedin_index.php">Store</a>


    <div class="collapse navbar-collapse" id="main-navigation">
        <!-- Modal HTML -->
    <div id="myModal11" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">SIGN-OUT YOUR ACCOUNT?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Select 'YES' if you wish to logout from your account.</p>
          </div>
          <div class="modal-footer">
            <div onclick = "location.href='cart.php'"><button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button></div>
              <form method="post" action="cart.php">
              <a><button name="passed" id="passed" class="btn btn-danger">Yes</button></a>
              </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- confirm end -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#myModal11" data-toggle="modal"><img src ="assets/images/profile.png" alt="logo" width="40px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><img src ="assets/images/cart.png" alt="logo" width="40px"></a>
        </li>

        </ul>

    </div>
  </nav>

<div class="content">                                                   <!--------------------     DIV CLASS CONTENT     -------------------->
        <a class="nav4-link" href="loggedin_index.php">Discover</a>
        <a class="nav5-link" href="loggedin_browse.php">Browse</a>

<div class= "cart">
<table>
  <thead>
      <tr>
      <th>Product(s)</th>
      <th></th>
      <th>Price</th>
      <th class="quantity">Quantity</th>
      <th></th>
      <th>Total</th>
      <th></th>
      <th></th></thead> 
<?php
   require_once('DB_CONNECTOR.php');
   error_reporting(0);

  if ($dbc-> connect_error){
    die("Connection failed:". $conn-> connect_error);
  }

  $sql = "SELECT id, image, title, price, quantity from products where added = 'yes' ORDER BY id asc " ;
  $result = $dbc-> query($sql);

  

  if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){

       $add = "Add";
       $rem = 'Rem';
       $conf = 'Conf';
       $Id = $row["id"];
       $qVal = $row["quantity"];
       $tot = $row['price']*$row['quantity'];
       $allowed = mysqli_query($dbc,"SELECT id FROM products WHERE added='yes'");
       $subTot += (float)$tot*(int)$allowed;
       $balance = 10000;
       $newbal = $balance - $subTot;

       if(isset($_POST['passed']) ){

        $newbal = $balance + $subTot;
    
        echo '<script>
    alert("Processing...");
    window.location.href="index.php";
    </script>';}

      echo "<tr>";
      echo "<td>";?><img src="<?php echo $row["image"]; ?>" width="160" height="205"><?php "</td>";
      echo "<td style='color: white;'>".$row["title"]."</td>";
      echo "<form action='cart_handler.php?id=$Id&action=$rem' method='post'>";
      echo "<td name='price' style='color: white;'>&#x20B1;".$row["price"]."</td>";
      echo "<td>"."<input class='EditSize' type='number' id='qty' name='quantity' value='$qVal' min='1' max='100' required></input>"."</td>";

      echo "<td>".
                    "<a href='test.php.php'>
                    <input type='submit' name='update'  class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' value='COMPUTE PURCHASE' name='update'></input>".
                    "</a></form>"
                    ."</td>";

      echo "<td style='color: white;'>".'&#x20B1;'.$tot."</td>";

      echo "<td>".
                    "<a href='#myModal' data-toggle='modal'>
                    <input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='add' value='REMOVE FROM CART'></input>".
                    "</a>"
                    ."</td>";

      ?><!-- Modal HTML -->
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">REMOVE THE ITEM</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Select 'Yes' button if you wish to remove the item from the cart.</p>
          </div>
          <div class="modal-footer">
          <div onclick = "location.href='cart.php'"><button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button></div><?php
              echo "<div class>";
                echo
                    "<a href='cart_handler.php?id=$Id&action=$conf' class='btn btn-danger' >
                    <input style='background-color: #dd163b; border-color:#dd163b;' type='button' class='passed' name='add' value='YES'></input>".
                    "</a>";?>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    
    <!-- confirm end --><?php

      echo "<td>".
                    "<a href='#myModall' data-toggle='modal'>
                    <input type='button' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1' name='passed' id='passed' value='CONFIRM PURCHASE'></input>".
                    "</a>"
                    ."</td>";

    ?><!-- Modal HTML -->
    <div id="myModall" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">CONFIRM PURCHASE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Select 'Yes' if you wish to proceed with this single item purchase.</p>
          </div>
          <div class="modal-footer">
            <div onclick = "location.href='cart.php'"><button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button></div><?php
              
              echo "<div class>";
                echo
                    
                    "<a href='cart_handler.php?id=$Id&action=$conf' class='btn btn-danger'>
                    <input style='background-color: #dd163b; border-color:#dd163b;' type='button' class='passed' name='add' value='YES'></input>".
                    "</a>";?>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- confirm end --><?php

      echo "</tr>";
    }
    echo "<tfoot>";
    echo "<tr>";
    echo "<form method='post' action='handler.php'>";


                    ?><!-- Modal HTML -->
                    <div id="myModal1" class="modal fade">
                      <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Confirm Purchase</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <p>Select 'Yes' if you wish to proceed with the purchase transaction.</p>
                          </div>
                          <div class="modal-footer">
                            <div onclick = "location.href='cart.php'"><button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button></div>
                              <form method="post" action="handler.php">
                              <a><button name="passed" id="passed" class="btn btn-danger"
                                >YES</button></a>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div></form>
                    <!-- confirm end --><?php

    echo "</tfoot>";
    echo "</table>";
    echo " <a href='#myModal1' data-toggle='modal' type='button' class='booker'>CONFIRM PURCHASE
    </a>";
    echo "<h1 class='total'>SUBTOTAL: &#x20B1;$subTot";
    echo "<br><br>";
    echo "<h1 class='total'>Account Balace: &#x20B1;$newbal";

  }
  else {
    echo "0 result";
  }
  $dbc-> close();
  ?>
</div>


   


    
