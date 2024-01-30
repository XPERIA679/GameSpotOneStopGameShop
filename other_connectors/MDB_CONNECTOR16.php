<?php
DEFINE('DB_USER16','root');
DEFINE('DB_PASSWORD16','');
DEFINE('DB_HOST16','localhost');
DEFINE('DB_NAME16','db_products');

$dbc16=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
