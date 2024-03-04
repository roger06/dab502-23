<h1>PDO connect fail</h1>
<p>wrong username</p>
<p>


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
//$db = new PDO('mysql:host=localhost; dbname=test;','root','');

$db = new PDO('mysql:host=localhost; dbname=rholden;','daffy-duck','wr0ngpassword');

// $db = new PDO('mysql:host=localhost; dbname=employees;','php','php');

var_dump($db);



?>
