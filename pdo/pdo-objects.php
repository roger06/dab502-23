<?php
// debugging script - displaying values / methods etc for various PDO objects

include('pdo-connect-inc.php');

    $query = "select * from employees limit 1000";
    $stmt = $db->query($query);


    echo '$db type = ' . gettype($db);
    echo '<p>$db class = ' . get_class($db);
    echo '<p> class methods = <pre>'; print_r( get_class_methods($db));

echo '<hr>';



    echo '<p>$stmt type = ' . gettype($stmt);
    echo '<p>$stmt class = ' . get_class($stmt);
    echo '<p> class methods = <pre>'; print_r( get_class_methods($stmt));
    echo '<hr>';



    // echo $stmt;
     $r = $stmt->fetch(PDO::FETCH_LAZY) ;

    echo '<p>$r type = ' . gettype($r);
    echo '<p>$r class = ' . get_class($r);

    echo '<p> class methods = <pre>'; print_r( get_class_methods($r));
    echo '<hr>';
exit;

//      print_r($r);

     

    while  ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        
        // echo htmlentities($row[1]). " ".htmlentities($row['last_name']) ."<br>";
        // echo htmlentities($row[1]). " ".htmlentities($row[2]) ."<br>";
        echo htmlentities($row[1]). " ".htmlentities($row['last_name']) ."<br>";
        
        
    }

// fetch returns associative and numerical array
/*
 while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)  { 
 while  ($row = $stmt->fetch(PDO::FETCH_NUM)  {



*/

?>
