
<h1>PDO Fetch</h1>

<p>fetch() need to be in a loop, unless returning only one record</p>

<p>

<pre>while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
}
</pre>
</p>
<?php
// include('pdo-connect-inc.php');

include('../basic-connect/pdo-connect.php');
 
    // $query = "select * from employees where id= " . $id;
    $query = "select * from player";

    // echo $query;
  
    $stmt = $db->query($query);

 
    while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // options
        /*
        PDO::FETCH_NUM
        PDO::FETCH_ASSOC
        */
        
        echo htmlentities($row['firstname']). " ".htmlentities($row['lastname']) ."<br>";
        
        
    }

// fetch returns associative and numerical array
/*
 while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)  { 
 while  ($row = $stmt->fetch(PDO::FETCH_NUM)  {



*/

?>
