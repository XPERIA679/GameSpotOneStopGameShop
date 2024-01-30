<?php
DEFINE('DB_USER41','root');
DEFINE('DB_PASSWORD41','');
DEFINE('DB_HOST41','localhost');
DEFINE('DB_NAME41','db_products');

$dbc41=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
