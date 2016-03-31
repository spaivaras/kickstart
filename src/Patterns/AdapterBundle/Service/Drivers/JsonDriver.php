<?php

namespace Patterns\AdapterBundle\Service\Driver;

use Patterns\AdapterBundle\Service\EngineDriverInterface;

class JsonDriver implements EngineDriverInterface
{
    public function import()
    {
        $data = json_encode([]);
        return json_decode($data, TRUE);
    }
}