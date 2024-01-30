<?php include('server.php') ?>
<html lang="en">
<head>
<style type="text/css">

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
       .navbar-collapse {
         justify-content: flex-end;
       }
 

</style>

<title>Game Spot One Stop Game Shop</title>
<link rel="icon" type="image/png" href="assets/images/logo.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Login.css">
</head>
<body>

                                        <!--------------------     NAVBAR     -------------------->

  <nav class="navbar navbar-expand-md" style="background-color: #121111;">
     <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><img src ="assets/images/logo.png" alt="logo" width="40px"></a>
        </li>
        </ul>
    </div>
  </nav>                                        <!--------------------     END OF NAVBAR     -------------------->



							
<div class="login-form">
    <form method="post" action="login.php">
	<?php include('errors.php'); ?>
        <h2 class="text-center">Sign In</h2>  
		
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email" required="required">
        </div>
		
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
		
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login_user">Log in</button>
        </div>
		
         <p class="text-center" ><a href="Signup.php">Create an Account</a></p>
    </form>
   
</div>

</body>
</html>