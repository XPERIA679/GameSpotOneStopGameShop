<?php
DEFINE('DB_USER42','root');
DEFINE('DB_PASSWORD42','');
DEFINE('DB_HOST42','localhost');
DEFINE('DB_NAME42','db_products');

$dbc42=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
