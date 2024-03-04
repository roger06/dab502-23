<h1>Stored function</h1>
<?php
include('pdo-connect-inc.php');

    $query = "select prod_name, price, calc_vat(price) as vatamount from movies limit 1000";
    $stmt = $db->query($query);

    while  ($row = $stmt->fetch()) {
        
        echo htmlentities($row['prod_name']). " ".htmlentities($row['price']) . " ". $row['vatamount']   ."<br>";
           
    }

// fetch returns associative and numerical array
/*
 while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)  { 
 while  ($row = $stmt->fetch(PDO::FETCH_NUM)  {



*/

?>
