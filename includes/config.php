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
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>