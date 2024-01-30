<?php
DEFINE('DB_USER4','root');
DEFINE('DB_PASSWORD4','');
DEFINE('DB_HOST4','localhost');
DEFINE('DB_NAME4','db_products');

$dbc4=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
