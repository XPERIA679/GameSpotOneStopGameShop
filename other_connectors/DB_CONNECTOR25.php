<?php
DEFINE('DB_USER25','root');
DEFINE('DB_PASSWORD25','');
DEFINE('DB_HOST25','localhost');
DEFINE('DB_NAME25','db_products');

$dbc25=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
