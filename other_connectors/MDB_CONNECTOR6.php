<?php
DEFINE('DB_USER6','root');
DEFINE('DB_PASSWORD6','');
DEFINE('DB_HOST6','localhost');
DEFINE('DB_NAME6','db_products');

$dbc6=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
