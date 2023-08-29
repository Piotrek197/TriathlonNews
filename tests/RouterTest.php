<?php

declare(strict_types=1);

namespace Tests;

require "src/Router.php";

use App\Essentials\Router;
use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase {

    private Router $router;


    protected function setUp(): void {

        parent::setUp();

        $this->router = new Router();
    }

    public function testRoutesAfterInitialization(): void {
        
        $router = new Router();
        $routes = $router->getRoutes();
        $this->assertEmpty($routes);
    }

    public function testResolveRoute():void {

        $mockClass = new class() {
            
            public function someMethod(): array {
                return [1,2,3];
            }
        };

        $this->router->get("/something", [get_class($mockClass), "someMethod"]);

        $this->assertSame([1,2,3], $this->router->resolve("/something", "get"));

    }




}