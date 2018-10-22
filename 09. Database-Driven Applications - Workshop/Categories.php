<?php

class Categories
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
        $result =  $this->db->query('SELECT CAT_NAME, CAT_ID FROM categories');

        if($result) {
            while ($row = $result->fetch_assoc()) {
                yield $row;
            }
        } else {
            die('Error: '.$this->db->error);
        }
    }
}