<h1>Prepared statements insert data</h1>
<?php
$database = "football";

include('pdo-connect.php');

$firstname = "firstname" . time();   // just add a timestamp to make it different when testing.
$lastname = "Holden";
 
    $stmt = $db->prepare("UPDATE player SET  firstname =  :firstname, lastname =  :lastname WHERE id IN (1,33,44)");
    $stmt->bindParam(':firstname',  $firstname);   
    $stmt->bindParam(':lastname',  $lastname);   
    
    try     {
        $stmt->execute();
        echo $stmt->rowCount() . " rows updated<p>";
        echo "<pre>". $stmt->debugDumpParams() . "</pre>" ;

    }
    
    // query fails
    catch  (PDOException $e) {
        
        echo '<p>Query failed.</p>';
        echo $e->getMessage();  // debugging only - not for production. OOK to leave in for assignment!!
        echo "<p>";
        echo $stmt->debugDumpParams();
        
    }

     

      



    
?>