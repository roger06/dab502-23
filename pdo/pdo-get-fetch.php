<h1>PDO Fetch</h1>
<?php
// include('pdo-connect-inc.php');

$db = new PDO('mysql:host=localhost; dbname=customer;','root','');  // XAMPP


    $id = $_GET['id'];

    // $query = "select * from employees where id= " . $id;
    $query = "select * from customer";

    // echo $query;
  
    $stmt = $db->query($query);

 
    while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // options
        /*
        PDO::FETCH_NUM
        PDO::FETCH_ASSOC
        */
        
        echo htmlentities($row['first_name']). " ".htmlentities($row['last_name']) ."<br>";
        
        
    }

// fetch returns associative and numerical array
/*
 while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)  { 
 while  ($row = $stmt->fetch(PDO::FETCH_NUM)  {



*/

?>
