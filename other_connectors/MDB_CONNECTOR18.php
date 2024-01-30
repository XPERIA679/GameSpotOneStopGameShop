<?php
DEFINE('DB_USER18','root');
DEFINE('DB_PASSWORD18','');
DEFINE('DB_HOST18','localhost');
DEFINE('DB_NAME18','db_products');

$dbc18=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
