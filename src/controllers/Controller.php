<?php

declare(strict_types=1);

namespace App\Controllers;

interface ControllerInterface {
    public function isValidString(string $arg);
    public function isValidInteger(int $arg);
    public function redirectTo(string $path);
}

class Controller {

    public static function isValidString(string $arg): bool {

        return !empty($arg);
    }

    public static function isValidInteger(int $arg): boolean {
        return false;
    }

    public static function redirectTo(string $path) {
        header("Location: /posts");
        die();
        return;
    }

}