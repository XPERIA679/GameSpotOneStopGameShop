<?php
DEFINE('DB_USER2','root');
DEFINE('DB_PASSWORD2','');
DEFINE('DB_HOST2','localhost');
DEFINE('DB_NAME2','db_products');

$dbc2=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
