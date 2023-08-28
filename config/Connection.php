<?php

namespace Connection;

use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

class Connection {

    private static $instance;

    public static function getInstance(){

        $connectionParams = [
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        ];


        /* creating connection */
        self::$instance = DriverManager::getConnection($connectionParams);

        return self::$instance;
    }


    /*Singletons should not be clonable */
    protected function __clone(){}
    
    
    private function __construct(){}


}