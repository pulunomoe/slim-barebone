<?php

/* For SQLite3 */
$pdo = new PDO('sqlite::memory:');

/* For MYSQL
$pdo = new PDO(
	'mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8mb4',
	'DB_USER',
	'DB_PASSWORD'
); */
