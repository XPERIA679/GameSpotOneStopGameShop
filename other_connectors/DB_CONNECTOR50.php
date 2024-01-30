<?php
DEFINE('DB_USER50','root');
DEFINE('DB_PASSWORD50','');
DEFINE('DB_HOST50','localhost');
DEFINE('DB_NAME50','db_products');

$dbc50=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
