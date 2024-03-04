<?php
include('pdo-connect-inc.php');


//var_dump($db->query("select * from employees limit 1000"));
//print_r($db->query("select * from employees limit 1000"));


    foreach ($db->query("select * from employees limit 1000") as $row) {
        
        echo htmlentities($row['first_name']). " ".htmlentities($row['last_name']) ."<br>";
        
        
    }

?>
