<?php

namespace Patterns\AdapterBundle\Service;

interface EngineDriverInterface
{
    /**
     * @return array
     */
    public function import();
}