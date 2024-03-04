<h1>Prepared statements</h1>
<?php
$db = new PDO('mysql:host=localhost; dbname=customer;','root','');  // XAMPP

var_dump($db);

// prepared statements remove the risk of sql injection 
// as don't involve inserting strings of text into our query
// thus don't need to sanitise the data first

// exact value
//    $stmt = $db->prepare("select * from actor where first_name = ?");
//    $stmt->bindValue(1, 'Chirstian');    

//like
//    $stmt = $db->prepare("select * from actor where first_name LIKE ? limit 10");
//    $stmt->bindValue(1, '%an%');


// multiple criteria (more bind value statements needed)
//    $stmt = $db->prepare("select * from actor where first_name LIKE ?  and last_name = ? limit 10");
//    $stmt->bindValue(1, '%an%');
//    $stmt->bindValue(2, 'M');

$name = 'Axe';
$last = "HACKMAN";
// using a variabls

    
    // $stmt = $db->prepare("select * from actor where first_name = ? AND last_name = ? limit 10");


    $stmt = $db->prepare("select * from actor where first_name = :first_name or last_name = :last_name limit 10");

    
    $stmt->bindParam(':first_name',  $name);  // need to use bindParam with a vars

    // $stmt->bindParam(':last_name',  $last);  // need to use bindParam with a vars
    
    
    // $stmt->bindParam(1,  $name);  // need to use bindParam with a vars

    // $stmt->bindParam(2,  $last);  // need to use bindParam with a vars

/*
The could be an array to search multiple values
$names = array ('Parto', 'Mary', 'Brendon', 'Basil', 'Hilari')
    
    foreach ($names as $name) {
        $stmt->bindParam(1,  $name); 
        $stmt->execute(); 
        ...
    }

// but this seems a daft way to do it...

*/
    
    $stmt->execute(); // 

    echo "rows returned = ". $stmt->rowCount();

    echo "<br>";

//var_dump($stmt) ;


    while  ($row  = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        echo 'first name = ' . htmlentities($first_name). "<br>last name = ". htmlentities($last_name) .  "<br>";        
//        echo ' last name = ' . htmlentities($last_name) . "<br>";
//        
//        echo "<pre>" . var_dump($row) . "</pre>";
       
    }

 
?>