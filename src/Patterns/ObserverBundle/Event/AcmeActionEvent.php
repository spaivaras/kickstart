<?php

namespace Patterns\ObserverBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class AcmeActionEvent extends Event
{
    const NAME = 'acme_action_event';

    private $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }
}