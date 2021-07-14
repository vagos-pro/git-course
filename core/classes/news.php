<?php


class news
{
    private $query;

    private function __construct($query)
    {
        $this->query = $query;
    }
    public static function getData($offset=0)
    {
        $query = "SELECT name, description, image_path, date FROM news ORDER BY id DESC LIMIT {$offset}, 3";
        $result = mysqli_query(db::getInstance(), $query);

        $news = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $news[] = $row;
        }
        return $news;
    }
    public static function getAllCount()
    {
        $query = "SELECT count(*) FROM news";
        $result = mysqli_query(db::getInstance(), $query);
        $count = mysqli_fetch_array($result);
        return (int)$count[0];
    }
}