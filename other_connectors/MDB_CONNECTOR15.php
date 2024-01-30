<?php
DEFINE('DB_USER15','root');
DEFINE('DB_PASSWORD15','');
DEFINE('DB_HOST15','localhost');
DEFINE('DB_NAME15','db_products');

$dbc15=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
