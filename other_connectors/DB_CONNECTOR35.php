<?php
DEFINE('DB_USER35','root');
DEFINE('DB_PASSWORD35','');
DEFINE('DB_HOST35','localhost');
DEFINE('DB_NAME35','db_products');

$dbc35=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>