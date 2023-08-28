<?php

namespace App\Controllers;

require "View.php";
require "./models/Post.php";
require "Controller.php";

use App\Essentials\View;
use App\Model\Post;

/*

Controller
isValidString()
isValidInterger()
redirectTo()
successNotification()
errorNotification()

*/


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

    public function anotherone(): string {
        return View::render("anotherone");
    }
}