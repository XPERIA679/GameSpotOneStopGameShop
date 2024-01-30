<?php
DEFINE('DB_USER43','root');
DEFINE('DB_PASSWORD43','');
DEFINE('DB_HOST43','localhost');
DEFINE('DB_NAME43','db_products');

$dbc43=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
