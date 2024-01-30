<?php
DEFINE('DB_USER23','root');
DEFINE('DB_PASSWORD23','');
DEFINE('DB_HOST23','localhost');
DEFINE('DB_NAME23','db_products');

$dbc23=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
