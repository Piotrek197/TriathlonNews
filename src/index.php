<?php

declare(strict_types=1);

namespace App;

require  __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/controllers/HomeController.php";
require "Router.php";

use Doctrine\DBAL\DriverManager;

define("VIEW_PATH", __DIR__ . "\\views\\templates\\pages");



$router = new Essentials\Router();

$router
        ->get("/", [Controllers\PostController::class, "index"])
        ->get("/posts", [Controllers\PostController::class, "getposts"])
        ->post("/post", [Controllers\PostController::class, "addPost"])
        ->post("/delete", [Controllers\PostController::class, "deletePostById"])
        ->post("/update", [Controllers\PostController::class, "updatePostById"]);

        
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));