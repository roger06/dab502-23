<?php

// displays all live categories.
// connection script
// 1. query
// display


// SELECT category_id,category_name FROM products_categories;

require_once('pdo-connect.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobby's best blenders</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9ba66e2797.js" crossorigin="anonymous"></script>
</head>

<body>

    <main>

        <header>
            <div class="logo">
                <img src="img/logo-200.png" alt="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

        </header>

        <section>
            <h1>Blenders for every occasion</h1>
            <div id="text">

                <div>
                    <ul>
                        <li>We have big blenders</li>
                        <li>We have blendy blenders</li>
                        <li>We have second hand Blenders</li>
                        <li>We repair blenders</li>
                        <li>We take old blenders as trade-in</li>
                    </ul>
                </div>


                <div><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe non quam, omnis quo ut necessitatibus
                    ipsum dicta, fugiat alias molestias quis numquam assumenda dignissimos illo, officiis voluptatum
                    incidunt optio asperiores eius quidem ea? At tenetur dolore nisi quam distinctio animi doloremque
                    odit
                    sit ratione blanditiis vel, eveniet maxime atque voluptas.</p></div>
            </div>


            <div id="products">

            <?php


                $query = "SELECT category_id,category_name FROM products_categories";
                $stmt = $db->query($query);

                $result = $stmt->fetchAll();

                foreach  ($result as $row) {
                    
                    $category_id = $row['category_id'];
                    $category_name = $row['category_name'];
                    ?>

                        <div class="product">
                            <h3><a href="products.php?category_id=<?php echo $category_id;?>"><?php echo $category_name;?> </a></h3>
                                                     
                           

                        </div>

                    <?php
                
                }
?>





            </div><!-- products -->
        </section>
        <footer>

            <div id="address">

                <p>1 Faceless Industrial Estate <br>
                    Low Air-quality Road<br>
                    Dullsville<br>
                    England
                </p>
            </div>
            <div id="links">
                <ul class="footer">

                    <li><a href="http://">Sensors</a></li>
                    <li><a href="http://">Brexit</a></li>
                    <li><a href="http://">History</a></li>
                    <li><a href="http://">About</a></li>

                </ul>

            </div>


        </footer>

    </main>


</body>

</html>