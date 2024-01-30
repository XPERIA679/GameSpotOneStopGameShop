<?php
DEFINE('DB_USER22','root');
DEFINE('DB_PASSWORD22','');
DEFINE('DB_HOST22','localhost');
DEFINE('DB_NAME22','db_products');

$dbc22=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
