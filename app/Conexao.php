<?php

namespace App\Conexao;

class Conexao{
    static private $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            $pdo = new \PDO();
        }
    }
}