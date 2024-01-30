<?php
DEFINE('DB_USER37','root');
DEFINE('DB_PASSWORD37','');
DEFINE('DB_HOST37','localhost');
DEFINE('DB_NAME37','db_products');

$dbc37=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
