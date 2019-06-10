<?php

namespace Behavioral\Strategy;

class Context
{
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(ComparatorInterface $comparator){
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $element):array{
        uasort($element, [$this->comparator,'compare']);

        return $element;
    }
}
