<?php

namespace App\Conexao;

class Conexao{
    static private $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost; dbname=php_pdf; charset=utf8', 'estudo', '');
            return self::$instance;
        }
    }
}