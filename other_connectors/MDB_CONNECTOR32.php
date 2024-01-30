<?php
DEFINE('DB_USER32','root');
DEFINE('DB_PASSWORD32','');
DEFINE('DB_HOST32','localhost');
DEFINE('DB_NAME32','db_products');

$dbc32=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
