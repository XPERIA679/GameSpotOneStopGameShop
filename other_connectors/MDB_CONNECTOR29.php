<?php
DEFINE('DB_USER29','root');
DEFINE('DB_PASSWORD29','');
DEFINE('DB_HOST29','localhost');
DEFINE('DB_NAME29','db_products');

$dbc29=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
