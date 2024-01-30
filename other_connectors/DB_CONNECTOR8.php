<?php
DEFINE('DB_USER8','root');
DEFINE('DB_PASSWORD8','');
DEFINE('DB_HOST8','localhost');
DEFINE('DB_NAME8','db_products');

$dbc8=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
