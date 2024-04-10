<p>Query inside foreach loop</p>
<p>add links to each - must use the primary key</p>

<pre>

    foreach ($db->query("select * from player limit 1000") as $row) { }

</pre>
<?php
include('../basic-connect/pdo-connect.php');


//var_dump($db->query("select * from employees limit 1000"));
//print_r($db->query("select * from employees limit 1000"));


    foreach ($db->query("select * from player limit 1000") as $row) {
        
        echo '<a href="player_details.php?playerid='.$row['playerid'].'">'. htmlentities($row['firstname']). " ".htmlentities($row['lastname']) ."  </a><br>";
        
        
        
      
        
    }

?>
