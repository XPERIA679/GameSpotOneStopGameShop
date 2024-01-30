<?php
DEFINE('DB_USER40','root');
DEFINE('DB_PASSWORD40','');
DEFINE('DB_HOST40','localhost');
DEFINE('DB_NAME40','db_products');

$dbc40=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
