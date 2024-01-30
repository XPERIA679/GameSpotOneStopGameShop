<?php
DEFINE('DB_USER30','root');
DEFINE('DB_PASSWORD30','');
DEFINE('DB_HOST30','localhost');
DEFINE('DB_NAME30','db_products');

$dbc30=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
