<!--  file to capture data to be inserted that will re=populate any fields if there are errors. -->
<pre>
<?php

if (isset($_POST['insert'])) {

    echo "form posted.";

    $title = $_POST['title'];

    print_r($_POST);
}


?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data {Book, student, product etc}</title>
</head>

<body>
    <h1>Insert book</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">

        <p>Title*<br>
            <input type="text" name="title" <?php if (isset($title)) echo 'value="'.$title.'"'  ;?>    >
        </p>

        <p>Year*<br>
            <input type="number" name="year" >
        </p>

        <p>ISBN<br>
            <input type="text" name="isbn">
        </p>

        <p>Publisher<br>
        <!-- needs to be the result of a query -->
            <select name="publisher">
                <option value="1">Penguin</option>
                <option value="2">Prentice</option>
                <option value="4" selected>Wiley</option>
                <option value="5">Beazley</option>
            </select>
        </p>
        <p><input type="submit" value="Insert" name="insert"></p>
    </form>

</body>

</html>