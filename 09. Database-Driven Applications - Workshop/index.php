<?php
spl_autoload_register();

$db = DBConnection::getConnection();

$products_obj = new Products($db);
$products = $products_obj->getList();

include ('header.php');
echo "<a href='edit_product.php'>Create new product</a>";
echo "<table border='1'>";
echo "<thead><td>ID</td><td>Product name</td><td>Category</td><td>Added on</td><td colspan='2'>Actions</td></thead>";
foreach ($products as $product) {
    $product_id = $product['PRODUCT_ID'];
    $name = $product['PRODUCT_NAME'];
    $category = $product['CAT_NAME'];
    $created = date('d.m.Y', strtotime($product['CREATE_DATE']));

    echo '<tr>';
    echo "<td>$product_id</td><td>$name</td><td>$category</td><td>$created</td>";
    echo '<td><a href="view_product.php?product_id='.$product_id .'">View</a></td>';
    echo '<td><a href="edit_product.php?product_id='.$product_id .'">Edit</a></td>';

    echo '</tr>';

}
echo "</table>";

include ('footer.php');
