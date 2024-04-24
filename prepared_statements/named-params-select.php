<?php
// include('pdo-connect-inc.php');
 
$database = "football";

include('pdo-connect.php');

// named parameters allow us to use db field names
 
    $firstname = 'Zelig';
    $lastname = 'Balcombe';
    
    $stmt = $db->prepare("select * from player where firstname = ? OR lastname = ?  limit 10");


  

    $stmt->bindParam(1,  $firstname);  // need to use bindParam with a vars
    $stmt->bindParam(2,  $lastname); 
    
    $stmt->execute(); // 

    echo "rows returned = ". $stmt->rowCount();
    echo "<br>";
//var_dump($stmt) ;


    while  ($row  = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        echo 'first name = ' . htmlentities($firstname). "last name = ". htmlentities($lastname) .  "<br>";        
 
       
    }

 
?>