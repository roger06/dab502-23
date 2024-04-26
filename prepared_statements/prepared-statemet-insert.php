<h1>Prepared statements insert data</h1>
<?php
$database = "football";

include('pdo-connect.php');



$name = "Roger";
$last = "Holden";
 


    $stmt = $db->prepare("INSERT INTO player  (firstname, lastname)  VALUES ( :firstname , :lastname) ");
    
    $stmt->bindParam(':firstname',  $name);   

    $stmt->bindParam(':lastname',  $last);   
    

  
  
    
    try     {
        $stmt->execute();

        // get the last inserted ID

        if ( $lastID = $db->lastInsertId()  ) echo "<p>ID of new player is " . $lastID . "</p>";

    }
    
    // query fails
    catch  (PDOException $e) {
        
        echo '<p>Query failed.</p>';

        echo $e->getMessage();  // debugging only - not for production. OOK to leave in for assignment!!
        echo "<p>";
        echo $stmt->debugDumpParams();
        
    }

     

      



    
?>