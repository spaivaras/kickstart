<?php

namespace Patterns\DependencyInjectionBundle\Service;

class Calculator
{
    /**
     * @var OperatorInterface
     */
    private $operator;

    public function __construct(OperatorInterface $operator)
    {
        $this->operator = $operator;
    }

    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    public function operation(array $arguments)
    {
        return $this->operator->execute($arguments);
    }
}