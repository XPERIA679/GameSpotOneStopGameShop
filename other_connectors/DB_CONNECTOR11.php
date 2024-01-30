<?php
DEFINE('DB_USER11','root');
DEFINE('DB_PASSWORD11','');
DEFINE('DB_HOST11','localhost');
DEFINE('DB_NAME11','db_products');

$dbc11=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
