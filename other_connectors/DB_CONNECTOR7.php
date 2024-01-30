<?php
DEFINE('DB_USER7','root');
DEFINE('DB_PASSWORD7','');
DEFINE('DB_HOST7','localhost');
DEFINE('DB_NAME7','db_products');

$dbc7=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
