<?php

namespace App\Essentials;

require __DIR__ . "/Connection.php";

use Connection\Connection;


class Db {

    private $conn;
    protected $sql;
    public $queryBuilder;


    public function __construct(){

        $this->conn = Connection::getInstance();

        
        /*creating query builder */
        $this->queryBuilder = $this->conn->createQueryBuilder();

    }

    public function insert($table, $params){
        
        return $this->conn->insert($table, $params);
    }

    public function delete($table, $params){
        return $this->conn->delete($table, $params);
    }

    public function fetch($sql){

        return $this->queryBuilder
        ->select('id', 'title')
        ->from('articles')
        ->fetchAssociative();


        // return null;
    }

    // public function getPosts() {
    //     return $this->queryBuilder
    //         ->select("*")
    //         ->from("articles")
    //         ->fetchAllAssociative();
    // }

}


