<?php


    echo '<pre>';     print_r($_REQUEST);     echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared statements</title>
</head>
<body>
    <h1>Prepared statements</h1>

    <section>

    <p><a href="<?php echo $_SERVER['PHP_SELF']  ;?>?action=createschema">Create football database</a></p>

    <p><a href="named-params-select.php">Prepared statements - SELECT</a></p>
    <p><a href="prepared-statemet-insert.php">Prepared statements - INSERT</a></p>
    <p><a href="prepared-statemet-insert.php">Prepared statements - UPDATE</a></p>


    </section>
    
</body>
</html>