<?php
DEFINE('DB_USER44','root');
DEFINE('DB_PASSWORD44','');
DEFINE('DB_HOST44','localhost');
DEFINE('DB_NAME44','db_products');

$dbc44=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
