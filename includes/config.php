<?php 
// DB credentials. local
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','tms');

define('DB_HOST','remotemysql.com');
define('DB_USER','6inMEqJuTO');
define('DB_PASS','YTNYHupTyF');
define('DB_NAME','6inMEqJuTO');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>