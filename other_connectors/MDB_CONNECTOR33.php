<?php
DEFINE('DB_USER33','root');
DEFINE('DB_PASSWORD33','');
DEFINE('DB_HOST33','localhost');
DEFINE('DB_NAME33','db_products');

$dbc33=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
