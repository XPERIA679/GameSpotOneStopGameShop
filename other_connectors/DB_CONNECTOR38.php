<?php
DEFINE('DB_USER38','root');
DEFINE('DB_PASSWORD38','');
DEFINE('DB_HOST38','localhost');
DEFINE('DB_NAME38','db_products');

$dbc38=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
