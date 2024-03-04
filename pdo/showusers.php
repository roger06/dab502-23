<h1>Show users</h1>
<?php
    // connect
    require_once('pdo-connect-inc.php');

    $query = "SELECT * FROM users where first_name like '%m%'";

    $stmt = $db->query($query);
    $result = $stmt->fetchAll();
    echo '<pre>';
    print_r($result);
    echo '</pre>';

?>