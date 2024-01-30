<?php
DEFINE('DB_USER12','root');
DEFINE('DB_PASSWORD12','');
DEFINE('DB_HOST12','localhost');
DEFINE('DB_NAME12','db_products');

$dbc12=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
