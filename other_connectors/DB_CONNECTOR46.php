<?php
DEFINE('DB_USER46','root');
DEFINE('DB_PASSWORD46','');
DEFINE('DB_HOST46','localhost');
DEFINE('DB_NAME46','db_products');

$dbc46=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
