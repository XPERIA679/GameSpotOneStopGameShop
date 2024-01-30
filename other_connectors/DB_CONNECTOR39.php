<?php
DEFINE('DB_USER39','root');
DEFINE('DB_PASSWORD39','');
DEFINE('DB_HOST39','localhost');
DEFINE('DB_NAME39','db_products');

$dbc39=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
