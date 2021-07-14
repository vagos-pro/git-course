<?php

class db
{
    private static $instance;

    public static function getInstance () {
        if (self::$instance === null) {
            $instance = new mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
            self::$instance = $instance;
            return self::$instance;
        } else {
            return self::$instance;
        }
    }

    private function __construct () {}
    private function __clone () {}
}
//$db1 = db::getInstance();
//var_dump($db1);