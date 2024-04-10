<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
//connect to db

$db = new PDO('mysql:host=localhost; dbname=football;','root','');
//host, user, pw    
// var_dump($db);



foreach ($db->query("select * from player") as $row ) {
     
    echo $row['firstname'] . "<br>";
}


?>