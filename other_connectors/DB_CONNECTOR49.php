<?php
DEFINE('DB_USER49','root');
DEFINE('DB_PASSWORD49','');
DEFINE('DB_HOST49','localhost');
DEFINE('DB_NAME49','db_products');

$dbc49=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
