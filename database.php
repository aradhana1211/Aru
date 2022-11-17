<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','admin');
define('DB_NAME','penabaf5_db');
error_reporting(1);
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$con=mysqli_connect("localhost","root","admin","penabaf5_db");
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
if (!$con) {
    echo "Could not connect to DBMS";       
}
date_default_timezone_set('Asia/Kolkata');
$time_stamp=date("Y-m-d H:i:s");
?>