<?php

namespace Patterns\DependencyInjectionBundle\Service;

interface OperatorInterface
{
    /**
     * @param array $arguments
     * @return mixed
     */
    public function execute($arguments);
}