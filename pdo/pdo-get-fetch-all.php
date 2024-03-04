<?php
include('pdo-connect-inc.php');

    $query = "select * from actor limit 10";
    $stmt = $db->query($query);

    $result = $stmt->fetchAll();

    foreach  ($result as $row) {
        $first_name = $row['first_name'];
        $last_name = $row[''];
        
        echo 'first name = ' . htmlentities($first_name);
        echo ' last name = ' . htmlentities($last_name) . "<br>";
    }

 
?>
