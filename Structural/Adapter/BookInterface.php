<?php

namespace Structural\Adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage():int;
}
