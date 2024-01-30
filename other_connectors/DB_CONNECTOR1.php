<?php
DEFINE('DB_USER1','root');
DEFINE('DB_PASSWORD1','');
DEFINE('DB_HOST1','localhost');
DEFINE('DB_NAME1','db_products');

$dbc1=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
