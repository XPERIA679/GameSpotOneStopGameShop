<?php
DEFINE('DB_USER28','root');
DEFINE('DB_PASSWORD28','');
DEFINE('DB_HOST28','localhost');
DEFINE('DB_NAME28','db_products');

$dbc28=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
