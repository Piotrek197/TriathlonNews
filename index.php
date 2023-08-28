<?php

declare(strict_types=1);

namespace App;

require  __DIR__ . "/vendor/autoload.php";
// include "project.php";
// require "./config/Db.php";
require "HomeController.php";
require "Router.php";

use Doctrine\DBAL\DriverManager;
// use Essentials\Db;

define("VIEW_PATH", __DIR__ . "\\views\\templates\\pages");

// $controller = new Controller();
// $controller->index();



$router = new Essential\Router();

// echo "<pre>";
$router
        ->get("/", [Controllers\PostController::class, "index"])
        ->get("/posts", [Controllers\PostController::class, "getposts"])
        ->get("/anotherone", [Controllers\PostController::class, "anotherone"])
        ->post("/post", [Controllers\PostController::class, "addPost"]);

        
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

// ->execute();

/*display view*/
// echo Controller::index();

// $db = new Db();
// var_dump($db->fetch("SELECT * FROM articles"));
// var_dump($db->insert("second post", "this is my second post"));
// var_dump($stmt);




// use Rych\Random\Random;
// use Project\Table as ProjectTable;

// class Table {

//     public static function get() {
//         echo "App.Table.get \n";
//     }
// }

// // ProjectTable::get();


// // echo (new Random())->getRandomInteger(1, 5);


// interface TableInterface {

//     public function save(array $data);
// }

// interface LogInterface {
//     public function log(string $message);
// }


// class Table1 implements TableInterface, Loginterface {

//     public function save(array $data){
//         return "saved \n";
//     }

//     public function log(string $message){

//         return $message . "\n";
//     }
// }







// echo (new Table1())->save([]);
// echo (new Table1())->log("interfaces are awesome");

// $loader = new \Twig\Loader\ArrayLoader([
//     'index' => 'Hello {{ name }}!', 
// ]);

// $loader = new \Twig\Loader\FilesystemLoader("templates");

// $twig = new \Twig\Environment($loader, [
//     'cache' => '/path/to/compilation_cache',
// ]);

// $twig = new \Twig\Environment($loader);

// echo $twig->render('index.twig', ['name' => 'Fabien']);