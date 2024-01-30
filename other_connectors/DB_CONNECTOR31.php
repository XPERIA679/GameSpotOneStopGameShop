<?php
DEFINE('DB_USER31','root');
DEFINE('DB_PASSWORD31','');
DEFINE('DB_HOST31','localhost');
DEFINE('DB_NAME31','db_products');

$dbc31=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
