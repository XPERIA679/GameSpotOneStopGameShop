<?php
DEFINE('DB_USER47','root');
DEFINE('DB_PASSWORD47','');
DEFINE('DB_HOST47','localhost');
DEFINE('DB_NAME47','db_products');

$dbc47=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
