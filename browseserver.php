<?php
session_start();

//--------------------   BROWSE SERVER  --------------------//

$firstname = "";
$lastname = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '','signin');

								//--------------------     Sign up    --------------------//
													
if (isset($_POST['reg_user'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $persons_check_query = "SELECT * FROM persons WHERE lastname='$lastname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $persons_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($persons) { 
    

    if ($persons['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO persons (firstname, lastname, email, password) 
  			  VALUES('$firstname', '$lastname', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: loggedin_browse.php');
  }
}


				 //--------------------     Sign in     --------------------//

if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM persons WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: loggedin_browse.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>