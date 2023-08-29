<?php


declare(strict_types=1);

namespace Tests;

require "src/models/Post.php";

use App\Model\Post;
use PHPUnit\Framework\TestCase;

final class PostTest extends TestCase {

    public function testAddPostTitle(): void {
        
        $newPost = new Post();

        $newPost->setTitle("test title");

        $this->assertSame("test title", $newPost->getTitle());

    }
}