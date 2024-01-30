<?php
DEFINE('DB_USER14','root');
DEFINE('DB_PASSWORD14','');
DEFINE('DB_HOST14','localhost');
DEFINE('DB_NAME14','db_products');

$dbc14=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
