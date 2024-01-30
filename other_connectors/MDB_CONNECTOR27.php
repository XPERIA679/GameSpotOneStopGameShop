<?php
DEFINE('DB_USER27','root');
DEFINE('DB_PASSWORD27','');
DEFINE('DB_HOST27','localhost');
DEFINE('DB_NAME27','db_products');

$dbc27=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
