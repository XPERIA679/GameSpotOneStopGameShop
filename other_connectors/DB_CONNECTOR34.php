<?php
DEFINE('DB_USER34','root');
DEFINE('DB_PASSWORD34','');
DEFINE('DB_HOST34','localhost');
DEFINE('DB_NAME34','db_products');

$dbc34=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
