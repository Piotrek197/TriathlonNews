<?php

namespace App\Model;

require __DIR__ . "/../config/Db.php";


use App\Essentials\Db;

interface PostInterface {

    public function savePost();
    public function getPosts();
    public function getPost(int $id);
    public function deletePost(int $id);
    public function updatePost(int $id);

}   

class Post {

    private $_title;
    private $_text;
    private $_category;
    private $_author;
    private $_date;
    private $_active;

    protected $db;

    const TABLE_NAME = "articles";

    public function __construct() {

    }


    public function getTitle(): string {
        return $this->_title;
    }
    public function getText(): string {
        return $this->_text;
    }
    public function getCategory(): string {
        return $this->_category;
    }


    public function setTitle(string $title) {
        $this->_title = $title;
        return $this;
    }
    public function setText(string $text) {
        $this->_text = $text;
        return $this;
    }
    public function setCategory(string $category) {
        $this->_category = $category;
        return $this;
    }

    public function savePost() {

        return (new Db())->insert(self::TABLE_NAME, [
            "title" => $this->_title,
            "text" => $this->_text,
            "author" => "Piotr"//$this->_category
        ]);
    }

    public static function getPosts() {
        return (new Db())->queryBuilder
        ->select("*")
        ->from("articles")
        ->fetchAllAssociative();
    }

    public static function deletePostById(int $id) {
        return (new Db())->delete(self::TABLE_NAME, ["id" => $id]);
    }

    public static function updatePostById(int $id):string {
        
        return "update post " . $id;
    }


}





