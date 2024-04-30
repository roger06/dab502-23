<?php
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../pdo-connect.php');


  echo '<pre>';  print_r( $_REQUEST )  ; echo '</pre><hr>';
//   echo '<pre>';  print_r( $_FILES )  ; echo '</pre>';
  
 
  
  // form is posted so we update
  if ($_POST['update']) {
      // run an update query
      
        echo "we are updating!";
        $name =  $_POST['name'];
        $price =  $_POST['price'];
        $information =  $_POST['information'];
        $product_id =  $_POST['product_id'];
        
        // todo - isset
        
        // check if a new image is uploaded
        
        if (isset ($_FILES['new_img'])) {
            
            //  validate and check !!!
            
            
            echo 'file details. <pre>';  print_r( $_FILES )  ; echo '</pre>';

            // upload file

            // if success - include new file name in theupdate query.



        }



        $stmt = $db->prepare("UPDATE products SET name = :name , price = :price, information = :information 
        WHERE product_id  =  :product_id" );


// todo - debugging 

        $stmt->bindParam(':name', $name  );
        $stmt->bindParam(':price', $price   );
        $stmt->bindParam(':information', $information   );
        $stmt->bindParam(':product_id', $product_id   );



$stmt->execute();
// echo $stmt->debugDumpParams();
 

    }
    
    else {
        
        echo "we are viewing!";
        
        // die;
  }



$product_id = $_REQUEST['product_id'];


//  TODO - error check we have a value
  $query = "SELECT product_id,name,prod_img, information, price FROM products WHERE product_id = " . $product_id;
  $stmt = $db->query($query);

  $data = $stmt->fetch();

//   echo '<pre>';  print_r(  $data )  ; echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit product</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">

    <!-- name -->
    <p>Name: <input type="text" name="name" value="<?php echo $data['name'];?>" ></p>


    <!-- price -->
    <p>Price: <input type="number" name="price"  value="<?php echo $data['price'];?>"  ></p>

    <p>
    Information<br>
    <textarea name="information" cols="30" rows="10">
        <?php echo nl2br( $data['information']);?>
    
    </textarea>
    </p>
    <input type="hidden" name="product_id"  value="<?php echo $data['product_id'];?>"    >

    <!-- image -->
    <p>
    <?php
//  $data['prod_img'] = '';
    // if we have a file name from DB and it exists in file system
    
        if ($data['prod_img'] != '' && file_exists("../prodimages/". $data['prod_img'] )    )  {
            ?>

            <img src="../prodimages/<?php echo $data['prod_img'];?>" alt="<?php echo $data['name'];?>"         width="200px">
        <?php
        }
    ?>

    </p>

    <p>

        <input type="file" name="new_img">
    </p>

    <p>
        <input type="submit" name="update" value="Update" >
    </p>


        </form>

    <?php

    echo $product_id ;

?>
    
</body>
</html>
