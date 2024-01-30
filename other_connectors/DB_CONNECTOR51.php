<?php
DEFINE('DB_USER51','root');
DEFINE('DB_PASSWORD51','');
DEFINE('DB_HOST51','localhost');
DEFINE('DB_NAME51','db_products');

$dbc51=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
