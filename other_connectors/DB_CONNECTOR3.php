<?php
DEFINE('DB_USER3','root');
DEFINE('DB_PASSWORD3','');
DEFINE('DB_HOST3','localhost');
DEFINE('DB_NAME3','db_products');

$dbc3=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
