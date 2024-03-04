<h1>PDO connect</h1>
<p>It looks like local XAMPP allows any user</p>
<p>

<a href="https://rholden-bs-dev.chi.ac.uk/dap522/pdo-connect.php">On dev server</a>
</p>


<!-- wrong pw -->
 
<p><a href="https://rholden-bs-dev.chi.ac.uk/dap522/pdo-connect-fail.php">wrong pw</a></p>

<!-- wrong user -->


<p><a href="https://rholden-bs-dev.chi.ac.uk/dap522/pdo-connect-fail-user.php">wrong user</a></p>


<?php



/*

mysql_* commands deprecated and should be replaced...

We can use PDO (PHP data objects )or mysqli

-No risk of SQL injection
-both support prepared statements
-PDO supports more dbs

*/
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


//connect to db

$db = new PDO('mysql:host=localhost; dbname=football;','root','root');


// dev server
// $db = new PDO('mysql:host=localhost; dbname=rholden_test;','rholden','');

// $db = new PDO('mysql:host=localhost; dbname=test;','root','password');  // Mac

// $db = new PDO('mysql:host=localhost; dbname=bookshop;','root','root'); // Uni phpMyAdmin?

// $db = new PDO('mysql:host=localhost; dbname=employees;','php','php');

var_dump($db);



?>
