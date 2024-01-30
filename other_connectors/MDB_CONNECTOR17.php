<?php
DEFINE('DB_USER17','root');
DEFINE('DB_PASSWORD17','');
DEFINE('DB_HOST17','localhost');
DEFINE('DB_NAME17','db_products');

$dbc17=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
