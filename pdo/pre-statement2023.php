<h1>Prepared statements</h1>
<?php
$db = new PDO('mysql:host=localhost; dbname=customer;','root','');  // XAMPP
var_dump($db);

$name = $_POST['search'];

    $stmt = $db->prepare('select * from customer where first_name LIKE "%":first_name"%" limit 10');
    $stmt->bindParam(':first_name',  $name);  // need to use bindParam with a vars
      
    
    $stmt->execute(); // 
    $stmt->debugDumpParams();

    echo "rows returned = ". $stmt->rowCount();
    echo "<br>";

    while  ($row  = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        echo 'first name = ' . htmlentities($first_name). "<br>last name = ". htmlentities($last_name) .  "<br>";        
      
    }
?>