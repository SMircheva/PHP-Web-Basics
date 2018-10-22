<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 18-Oct-18
 * Time: 6:27 PM
 */

class Products
{
    private $db;

    /**
     * Products constructor.
     * @param $db
     */
    public function __construct(mysqli $db)
    {
        $this->db = $db;
    }



    public function getList() {
        $result =  $this->db->query('SELECT p.PRODUCT_ID, p.PRODUCT_NAME, p.CREATE_DATE, c.CAT_NAME, c.CAT_ID
            FROM products p
             INNER JOIN categories c USING(CAT_ID)');

        if($result) {
            while ($row = $result->fetch_assoc()) {
                yield $row;
            }
        } else {
            die('Error: '.$this->db->error);
        }
    }

    public function getOne(int $product_id)
    {
        $result =  $this->db->prepare('SELECT p.PRODUCT_ID, p.PRODUCT_NAME, p.CREATE_DATE, p.CREATE_DATE, c.CAT_NAME, p.PRICE
            FROM products p
             INNER JOIN categories c USING(CAT_ID)
             WHERE PRODUCT_ID = ?');
        $result->bind_param('i',$product_id);
        $result->execute();

        if($result) {
            return $result->fetch();
        } else {
            die('Error: '.$this->db->error);
        }
    }

    public function createProduct($product_name, $price, $description, $cat_id)
    {
        $result = $this->db->prepare('INSERT INTO products (PRODUCT_NAME, CAT_ID, PRICE, DESCRIPTION)
                                 VALUES(?, ?, ?, ?)');
        $result->bind_param('sisd', $product_name,$cat_id, $price, $description);
        $result->execute();

        return $this->db->insert_id;
    }

    public function updateProduct($product_id, $product_name, $price, $description, $cat_id)
    {
        $result = $this->db->prepare('UPDATE products 
         SET PRODUCT_NAME = ?,
             CAT_ID = ?,
             PRICE = ?,
             DESCRIPTION = ?
            WHERE PRODUCT_ID = ?');
        $result->bind_param('sidsi', $product_name,$cat_id, $price, $description, $product_id);
        $result->execute();
    }
}