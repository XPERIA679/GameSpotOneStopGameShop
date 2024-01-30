<?php
DEFINE('DB_USER48','root');
DEFINE('DB_PASSWORD48','');
DEFINE('DB_HOST48','localhost');
DEFINE('DB_NAME48','db_products');

$dbc48=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
