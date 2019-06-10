<?php

namespace Behavioral\State;

class CreateOrder extends StateOrder
{
    public function __construct(){
        $this->setStatus('created');
    }

    protected function done(){
        static::$state = new ShippingOrder();
    }
}
