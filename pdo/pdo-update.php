<?php
include('pdo-connect-inc.php');





    $stmt = $db->prepare("update employees set hire_date = :hire_date where first_name = :first_name and last_name = :last_name");

/* 
or do with this named params.
VALUES (:first_name ...)");
...

$stmt->bindValue(:first_name, 'Roger');   

*/
     

    $stmt->bindValue(':first_name', 'Roger');   
    $stmt->bindValue(':last_name', 'Holden');   
    $stmt->bindValue(':hire_date', '2010-02-01');   

 
    
    $stmt->execute(); // 

    echo "rows updated = ". $stmt->rowCount();

//var_dump($stmt) ;

 
 
?>