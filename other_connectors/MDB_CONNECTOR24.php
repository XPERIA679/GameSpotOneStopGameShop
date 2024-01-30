<?php
DEFINE('DB_USER24','root');
DEFINE('DB_PASSWORD24','');
DEFINE('DB_HOST24','localhost');
DEFINE('DB_NAME24','db_products');

$dbc24=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
