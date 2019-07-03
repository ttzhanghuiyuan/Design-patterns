<?php
namespace Creational\FactoryMethod\Tests;
use Creational\FactoryMethod\FileLogger;
use Creational\FactoryMethod\FileLoggerFactory;
use Creational\FactoryMethod\StdoutLogger;
use Creational\FactoryMethod\StdoutLoggerFactory;
include('../../reload.php');

class FactoryMethodTest
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        var_dump(StdoutLogger::class,$logger);
    }
    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        var_dump(FileLogger::class,$logger);
    }
}

$test = new FactoryMethodTest;
echo "test============\n";
$test->testCanCreateStdoutLogging();
echo "test============\n";
$test->testCanCreateFileLogging();
