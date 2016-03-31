<?php

namespace Patterns\AdapterBundle\Service\Driver;

use Patterns\AdapterBundle\Service\EngineDriverInterface;

class ArrayDriver implements EngineDriverInterface
{
    public function import()
    {
        return [];
    }
}