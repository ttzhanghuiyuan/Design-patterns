<?php
namespace Structural\DataMapper\Tests;

use Structural\DataMapper\StorageAdapter;
use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;
include('../../reload.php');

class DataMapperTest
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        var_dump($user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        var_dump($mapper->findById(1));
    }
}

$test = new DataMapperTest;
echo "test============\n";
$test->testCanMapUserFromStorage();
echo "test============\n";
$test->testWillNotMapInvalidData();

