<?php

namespace More\ServiceLocator;

class ServiceLocator
{
    /**
     * @var array
     */
    private $services = [];

    /**
     * @var array
     */
    private $instantiated = [];

    /**
     * @var array
     */
    private $shared = [];

    /**
     * 相比在这里提供一个类，你也可以为接口存储一个服务。
     *
     * @param string $class
     * @param object $service
     * @param bool $share
     */
    public function addInstance(string $class,$service,bool $share = true){
        $this->service[$class] = $service;
        $this->instantiated[$class] = $service;
        $this->shared[$class] = $service;
    }

    /**
     * 相比在这里提供一个类，你也可以为接口存储一个服务。
     *
     * @param string $class
     * @param array $params
     * @param bool $share
     */
    public function addClass(string $class,array $params,bool $share = true){
        $this->services[$class] = $params;
    }

    public function has(string $interface):bool{
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    /**
     * @param string $class
     *
     * @return object
     */
    public function get(string $class){
        if(isset($this->instantiated[$class]) && $this->shared[$class]){
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];

        switch(count($args)){
        case 0:
            $object = new $class();
            break;
        case 1:
            $object = new $class($args[0]);
            break;
        case 2:
            $object = new $class($args[0],$args[1]);
            break;
        case 3:
            $object = new $class($args[0],$args[1],$args[2]);
            break;
        default :
            throw new \OutOfRangeException('Too many arguments given');
        }

        if($this->shared[$class]){
            $this->instantiated[$class] = $object;
        }

        return $object;
    }
}
