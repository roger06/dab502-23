<?php
include('pdo-connect-inc.php');





    $stmt = $db->prepare("delete from employees where first_name = :first_name and last_name = :last_name and emp_no = :emp_no");

 
     

    $stmt->bindValue(':first_name', 'Roger');   
    $stmt->bindValue(':last_name', 'Holden');   
    $stmt->bindValue(':emp_no', 124567);   

 
    
    $stmt->execute(); // 

    echo "rows returned = ". $stmt->rowCount();

//var_dump($stmt) ;

 
 
?>