<?php

namespace More\Repository\Tests;

use More\Repository\MemoryStorage;
use More\Repository\Post;
use More\Repository\PostRepository;
include('../../reload.php');

class RepositoryTest
{
    public function testCanPersistAndFindPost()
    {
        $repository = new PostRepository(new MemoryStorage());
        $post = new Post(null, 'Repository Pattern', 'Design Patterns PHP');

        $repository->save($post);

        var_dump($post->getId());
        var_dump($repository->findById(1)->getId());
    }
}

$test = new RepositoryTest;
echo "test============\n";
$test->testCanPersistAndFindPost();

