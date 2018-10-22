<?php
spl_autoload_register();

$db = DBConnection::getConnection();

$product_obj = new Products($db);

include ('header.php');
$product_id = $_GET['product_id']??null;
if(!$product_id) {
    echo 'No product id!';
    include('footer.php');
    die;
}

$product = $product_obj->getOne($product_id);

if(isset($_GET['mode'])) {
    if($_GET['mode'] == 1) {
        echo "<p>Product updated successfully!</p>";

    } elseif($_GET['mode'] == 2) {
        echo "<p>Product created successfully!</p>";
    }
}

$product_name = $product['product_name'];
var_dump($product_name);
if($product) {
    echo "<h1>$product_name</h1>";
} else {
    echo "No product found!";
}

include('footer.php');