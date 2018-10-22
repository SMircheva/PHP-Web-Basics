<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 19-Oct-18
 * Time: 10:34 PM
 */

class DBConnection
{

    public static function getConnection() {
        $connection =  new mysqli('localhost', 'root', '', 'shop');
        mysqli_set_charset($connection , "utf8");
        return $connection;
    }
}