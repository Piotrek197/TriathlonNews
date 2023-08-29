<?php

namespace App\Controllers;

require   __DIR__ . "/../View.php";
require   __DIR__ . "/../models/Post.php";
require   __DIR__ . "/Controller.php";

use App\Essentials\View;
use App\Model\Post;


class PostController extends Controller {


    public function index($content = ""): string { 

        return View::render("content");
    }
    
    public function getposts(): string {
        
        $posts = Post::getPosts();
        
        return View::render("posts", ["posts" => $posts]);
    }

    public function addPost(array $params){

        
        if(!self::isValidString($params['title'])  || !self::isValidString($params['post-body'])) return null;

        $newPost = new Post();
        var_dump($newPost
            ->setTitle($params['title'])
            ->setText($params['post-body'])
            ->savePost());
            // ->setAuthor($params['author'])

        return "add post";
    }

    public function deletePostById(array $params){

        $id = $params['id'];

        // if(!self::isValidInteger($id)) return null;

        if(Post::deletePostById($id))
            return self::redirectTo("/posts");
    }

    public function updatePostById(array $params){

        $id = (int)$params['id'];

        // if(!self::isValidInteger($id)) return null;

        echo Post::updatePostById($id);
    }
}