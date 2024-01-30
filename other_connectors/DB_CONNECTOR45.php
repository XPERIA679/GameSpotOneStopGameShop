<?php
DEFINE('DB_USER45','root');
DEFINE('DB_PASSWORD45','');
DEFINE('DB_HOST45','localhost');
DEFINE('DB_NAME45','db_products');

$dbc45=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
