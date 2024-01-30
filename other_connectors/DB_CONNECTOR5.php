<?php
DEFINE('DB_USER5','root');
DEFINE('DB_PASSWORD5','');
DEFINE('DB_HOST5','localhost');
DEFINE('DB_NAME5','db_products');

$dbc5=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
