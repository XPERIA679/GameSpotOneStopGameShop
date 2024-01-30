<?php
DEFINE('DB_USER20','root');
DEFINE('DB_PASSWORD20','');
DEFINE('DB_HOST20','localhost');
DEFINE('DB_NAME20','db_products');

$dbc20=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
