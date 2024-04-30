<?php
/**
 *  get category id from URL
 *  [error check ]
 * 
 * get all products in category
 * 
 * SELECT * FROM products WHERE category_id = 1;
 * 
 */
require_once('../pdo-connect.php');

$category_id = $_GET['category_id'];
//  TODO - error check we have a value

echo $category_id;




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin suite</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- TODO CSS?-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9ba66e2797.js" crossorigin="anonymous"></script>
</head>

<body>

    <main>

        <header>
            <!-- <div class="logo">
                <img src="../img/logo-200.png" alt="logo">
            </div> -->
            <nav>
                <ul>
                    <li><a href="#">Admin Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Categories</a></li>
                    
                </ul>
            </nav>

        </header>

        <section>
            <h1>Admin suite</h1>
            <div id="text">

                

 

            <div id="products">

            <?php
            $query = "SELECT * FROM products WHERE category_id = " . $category_id;
                $stmt = $db->query($query);

                $result = $stmt->fetchAll();

                foreach  ($result as $row) {
                    
                    $product_id = $row['product_id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $information = $row['information'];
                    $prod_img = $row['prod_img'];

                  

                     
                    ?>

                        <div class="product">
                            <p><a href="edit_product.php?product_id=<?php echo $product_id;?>"><?php echo $name;?> </a>
                             <?php echo $information;?> 
                           <?php echo $price;?> 
                           
                           <!-- <a href="product.php?product_id=<?php echo $product_id;?>"><img src="../prodimages/<?php echo $prod_img;?> " alt="<?php echo $name;?>"></a> -->

                </p>
                                                     
                           

                        </div>

                    <?php
                
                }

                ?>

                 
              


            </div><!-- products -->
        </section>
        <footer>

            


        </footer>

    </main>


</body>

</html>