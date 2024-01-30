<?php include('browseserver.php') ?>

<!--------------------   BROWSE SIGN UP   -------------------->

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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="signup.css">
</head>
<body>


                                        <!--------------------     NAVBAR     -------------------->

  <nav class="navbar navbar-expand-md" style="background-color: #282828;">
     <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="browse.php"><img src ="assets/images/logo.png" alt="logo" width="40px"></a>
        </li>
        </ul>
    </div>
  </nav>                                        <!--------------------     END OF NAVBAR     -------------------->


									

<div class="main-banner" id="top">
<div class="signup-form">
    <form method="post" action="Signup.php">
	<?php include('errors.php'); ?>
		<h2>Signup</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
			
				<div class="col"><input type="text" class="form-control"  name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>" required="required" ></div>
				<div class="col"><input type="text" class="form-control"  name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>" required="required" ></div>
				
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password_1" value="<?php echo $password_1; ?>"  placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password_2" value="<?php echo $password_2; ?>"  placeholder="Confirm Password" required="required">
        </div>        
        
        <label class="form-check-label"><input type="checkbox" required="required"><a href="#"> Are you Over 18?</a></label>
        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="reg_user" class="btn btn-success btn-lg btn-block"> Register Now</button>
        </div>
		
		<div class="text-center">Already have an account? <a href="bsi.php">Sign in</a></div>
    </form>
	
</div>
</div>
</div>

</body>
</html>