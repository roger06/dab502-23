<p>fetchAll() puts query results in an array</p>

<pre>

$stmt = $db->query($query);

$result = $stmt->fetchAll();

foreach  ($result as $row) { }

</pre>
<?php
include('../basic-connect/pdo-connect.php');

    $query = "select * from player limit 50";
    $stmt = $db->query($query);

    $result = $stmt->fetchAll();

    foreach  ($result as $row) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        
        echo 'first name = ' . htmlentities($firstname);
        echo ' last name = ' . htmlentities($lastname) . "<br>";
    }

 
?>
