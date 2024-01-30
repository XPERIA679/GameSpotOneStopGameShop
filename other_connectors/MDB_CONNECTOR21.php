<?php
DEFINE('DB_USER21','root');
DEFINE('DB_PASSWORD21','');
DEFINE('DB_HOST21','localhost');
DEFINE('DB_NAME21','db_products');

$dbc21=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
