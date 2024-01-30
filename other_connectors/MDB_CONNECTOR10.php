<?php
DEFINE('DB_USER10','root');
DEFINE('DB_PASSWORD10','');
DEFINE('DB_HOST10','localhost');
DEFINE('DB_NAME10','db_products');

$dbc10=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
