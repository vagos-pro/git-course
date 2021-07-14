<?php


class menu
{
    private $query;

    private function __construct($query) {
        $this->query = $query;
    }
    public static function getData() {
        $query = "SELECT text, link FROM menu";
        $result = mysqli_query(db::getInstance(), $query);
        return $result;
    }
}