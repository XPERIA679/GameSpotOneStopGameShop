<?php
DEFINE('DB_USER13','root');
DEFINE('DB_PASSWORD13','');
DEFINE('DB_HOST13','localhost');
DEFINE('DB_NAME13','db_products');

$dbc13=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
