<?php
DEFINE('DB_USER36','root');
DEFINE('DB_PASSWORD36','');
DEFINE('DB_HOST36','localhost');
DEFINE('DB_NAME36','db_products');

$dbc36=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
