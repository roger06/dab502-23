<?php
include('pdo-connect-inc.php');


    $stmt = $db->prepare("insert into employees (first_name, last_name, gender, emp_no) VALUES (?, ?, ?, ?)");

/* 
or do with this named params.
VALUES (:first_name ...)");
...

$stmt->bindValue(:first_name, 'Roger');   

*/
     
    $stmt->bindValue(1, 'Roger');   
    $stmt->bindValue(2, 'Holden');   
    $stmt->bindValue(3, 'M');   
    $stmt->bindValue(4, 124567);   
 
    
    $stmt->execute(); // 

    echo "rows returned = ". $stmt->rowCount();

//var_dump($stmt) ;


?>