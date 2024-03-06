<h1>PDO connect</h1>
<?php
/*

mysql_* commands deprecated and should be replaced...

We can use PDO (PHP data objects )or mysqli

-No risk of SQL injection
-both support prepared statements
-PDO supports more dbs

*/
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


//connect to db

$db = new PDO('mysql:host=localhost; dbname=football;','root','password');

var_dump($db);



?>
