<?php

namespace Patterns\DependencyInjectionBundle\Service;

class ObjectFactory
{
    public function createObject()
    {
        return new \stdClass();
    }
}