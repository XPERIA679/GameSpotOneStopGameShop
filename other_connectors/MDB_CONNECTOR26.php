<?php
DEFINE('DB_USER26','root');
DEFINE('DB_PASSWORD26','');
DEFINE('DB_HOST26','localhost');
DEFINE('DB_NAME26','db_products');

$dbc26=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
