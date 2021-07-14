<?php


class services
{
    private $query;

    private function __construct($query) {
        $this->query = $query;
    }
    public static function getData() {
        $query = "SELECT name, description, image_path, date FROM service";
        $result = mysqli_query(db::getInstance(), $query);
        return $result;
    }
}