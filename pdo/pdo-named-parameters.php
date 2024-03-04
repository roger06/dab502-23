<?php
// include('pdo-connect-inc.php');
include('../pdo/pdo-connect-inc.php');

// named parameters allow us to use db field names
 
    $name = 'Chauncey';
    $gender = 'Female';
    
    $stmt = $db->prepare("select * from employees where first_name = ? AND gender = ? AND ip_address = ? AND email  ?  limit 10");

  

    $stmt->bindParam(1,  $name);  // need to use bindParam with a vars
    $stmt->bindParam(2,  $gender); 
    $stmt->bindParam(3,  $ip); 
    
    $stmt->execute(); // 

    echo "rows returned = ". $stmt->rowCount();
    echo "<br>";
//var_dump($stmt) ;


    while  ($row  = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $first_name = $row['first_name'];
        $gender = $row['gender'];
        echo 'first name = ' . htmlentities($first_name). "gender = ". htmlentities($gender) .  "<br>";        
 
       
    }

 
?>