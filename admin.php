<?php
session_start();
include "DB_CONNECTOR.php";

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
      <title>Admin</title>
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


</head>

<body>
                                        <!--------------------     NAVBAR     -------------------->

    <nav class="navbar navbar-expand-md" style="background-color: #121111;">
    <a><img src ="assets/images/logo.png" alt="logo" width="40px">


    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        </li>

        </ul>

    </div>
  </nav> 

<div class = "admin">
<div class="container">
            <div class="col-lg-4">
                <h2 style="text-align: center;">Product Registration</h2>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group-product">
                      <input type="text" name="title" class="form-control" placeholder="Product Name"Required >
                    </div>

                    <div class="form-group-product">
                      <input type="text" name="price" class="form-control" placeholder="Product Price" Required>
                    </div>

                    <div class="form-group-product"> 
                      <input type="text" name="quantity" class="form-control" placeholder="Product Quantity" Required>
                    </div>

                    <div class="form-group-product"> 
                      <input type="text" name="added" class="form-control" placeholder="Added?" Required>
                    </div>

                    <div class="form-group-product">
                    <input type="file" name="image" id="image" class="form-control" >
                    </div>

                    <div class="product-button">
                    <button type="submit" name="insert" class="btn btn-default">Insert</button>
                    <button class="btn btn-default"onClick="window.location.reload();">Refresh</button>
        
                    
                    </div>
                </form>
            </div>
        </div>

        <br><br><br>
</div>

<div class="col-lg-12">
            
            <table class="table table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th style="text-align:left">Id</th>
                    <th style="text-align:left">Name</th>
                    <th style="text-align:left">Price</th>
                    <th style="text-align:left">Quantity</th>
                    <th style="text-align:left">Added</th>
                    <th style="text-align:left">Image</th>
                    <th style="text-align:left">Edit</th>
                    <th style="text-align:left">Delete</th>
                </tr>
                </thead>

                <tbody>            
                    <?php
                        $tbl=mysqli_query($dbc,"select * from products");
                        while($row=mysqli_fetch_array($tbl))
                        {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["title"]; echo "</td>";
                            echo "<td>"; echo $row["price"]; echo "</td>";
                            echo "<td>"; echo $row["quantity"]; echo "</td>";
                            echo "<td>"; echo $row["added"]; echo "</td>";
                            echo "<td>"; ?> <img src="<?php echo $row ["image"]; ?>" height="100" width="100"> <?php echo "</td>";

                            echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"<button type="button" class="btn-admin">Edit</button></a> <?php echo "</td>";
                            echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"<button  type="button" class="btn-admin">Delete</button></a> <?php echo "</td>";

                            echo "</tr>";
                        }
                    ?>
                </tbody>

            </table>
        </div>
        
<!--------- PHP CODE --------->
<?php
if(isset($_POST["insert"]))
{
    $tm=md5 (time());
    $fnm=$_FILES["image"]["name"];
    $imgn="./img_upload/".$tm.$fnm;
    $imgn1="img_upload/".$tm.$fnm;
    move_uploaded_file($_FILES["image"]["tmp_name"],$imgn);

    mysqli_query($dbc, "insert into products values(NULL, '$imgn1', '$_POST[title]', '$_POST[price]', '$_POST[quantity]', '$_POST[added]' )");

    
	?>
	<script type="text/javascript">
	window.location.href=window.location.href
	<script>
	
  
	<?php
  
}
?>