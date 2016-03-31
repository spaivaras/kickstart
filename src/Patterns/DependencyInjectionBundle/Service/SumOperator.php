<?php

namespace Patterns\DependencyInjectionBundle\Service;

class SumOperator implements OperatorInterface
{
    public function execute($arguments)
    {
        return array_sum($arguments);
    }
}