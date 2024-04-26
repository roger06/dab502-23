<?php

// displays details for a specific product
// connection script
// 1. query
// display


// SELECT product_id,name,prod_img, information FROM products;

require_once('pdo-connect.php');
$product_id = $_GET['product_id'];
//  TODO - error check we have a value
  $query = "SELECT product_id,name,prod_img, information, price FROM products WHERE product_id = " . $product_id;
  $stmt = $db->query($query);

  $data = $stmt->fetch();

    // print_r($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['name'];?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
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
                    <li><a href="product.html">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>


            </nav>

        </header>


        <section>
            <h1>NINJA Nutri Ninja BL450 Blender Black & Silver</h1>

            <div id="breadcrumb">Home > categories > blenders > Ninja Blender</div>
            <div id="prod-details">

                <!-- image -->


                <div class="product">
                    <h3><?php echo $data['name'];?></h3>
                    <div id="rating">
                        <i class="fas fa-star fa-1x "></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                   
                    <img src="prodimages/<?php echo $data['prod_img'];?>" alt="<?php echo $data['name'];?>">
                </div>

                <!-- description -->
                <div class="proddesc">
                    <h3>Description</h3>
                    <p><?php echo $data['information'];?></p>
                </div>

                <!-- tools -->
                <div>
                    <p class="price">&pound;<?php echo $data['price'];?></p>
                    <button class="add">Add to basket</button>
                    <button class="save">Save for later</button>
                    <button class="reviews">Reviews (47)</button>

                </div>
            </div><!-- prod-details -->

            <div id="related-items">



            </div>


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