<h1>Prepared statements insert data</h1>
<?php
include('pdo-connect-inc.php');



$name = 'Roger';
$last = "Holden";


    $stmt = $db->prepare("INSERT INTO actorddd  (first_name, last_name  )  VALUES ( :first_name , :last_name) ");

    
    $stmt->bindParam(':first_name',  $name);   

    $stmt->bindParam(':last_name',  $last);   
    
    try     {
 $stmt->execute();
        // echo '<p>Success</p>';
        // echo "<br>the ID of the record just inserted is: " . $db->lastInsertId();
        // echo "<br>rows returned = ". $stmt->rowCount();
        
        // insert into link table film_actor.
    }
    
    // query fails
    catch  (PDOException $e) {
        
        echo '<p>Query failed.</p>';

        echo $e->getMessage();  // debugging only - not for production. OOK to leave in for assignment!!

        
    }

     

      



    
?>