<?php
DEFINE('DB_USER9','root');
DEFINE('DB_PASSWORD9','');
DEFINE('DB_HOST9','localhost');
DEFINE('DB_NAME9','db_products');

$dbc9=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
