<?php
DEFINE('DB_USER19','root');
DEFINE('DB_PASSWORD19','');
DEFINE('DB_HOST19','localhost');
DEFINE('DB_NAME19','db_products');

$dbc19=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
