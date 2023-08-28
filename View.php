<?php

declare(strict_types=1);

namespace App\Essentials;

class View {
    
    // private $view;
    private $params;

    public function __construct($params = []){
        // $this->view = $view;
        $this->params = $params;
    }

    public static function render($layout = "", $args = []): string {


        $main_template_path = VIEW_PATH . "\\..\\index.php"; 
        $viewpath = VIEW_PATH . "\\" . $layout . ".php"; 

        extract($args);

        // if(!file_exists($viewpath)) throw new Exception("Cannot find a view");
        
        ob_start();

        include $main_template_path;

        $main = ob_get_clean();

        ob_start();

        include $viewpath;

        $replacement = ob_get_clean();

        return str_replace('{% content %}', $replacement, $main);

    } 

    // public function __toString(){
    //     return $this->render();
    // }


}