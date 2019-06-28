<?php

namespace More\ServiceLocator\Tests;

use More\ServiceLocator\LogService;
use More\ServiceLocator\ServiceLocator;
include('../../reload.php');

class ServiceLocatorTest
{
    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function __construct(){
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices(){
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        var_dump($this->serviceLocator->has(LogService::class));
        var_dump($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet(){
        $this->serviceLocator->addClass(LogService::class,[]);
        $logger = $this->serviceLocator->get(LogService::class);

        var_dump($logger);
    }
}

$test = new ServiceLocatorTest;
echo "test1============\n";
$test->testHasServices();
echo "test2============\n";
$test->testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet();

