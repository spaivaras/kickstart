<?php

namespace Patterns\ObserverBundle\Service;

use Patterns\ObserverBundle\Event\AcmeActionEvent;
use Patterns\ObserverBundle\Event\Events;
use Symfony\Component\EventDispatcher\EventDispatcher;

class AcmeService
{

    /**
     * @var EventDispatcher
     */
    private $dispatcher;

    public function __construct($dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function action()
    {
        $object = new \stdClass();
        $object->title = 'Random';

        $this->dispatcher->dispatch(Events::APP_ACME_PRE_CALL, new AcmeActionEvent($object));

        // do some things with object :)
        $object->price = 5;

        $this->dispatcher->dispatch(Events::APP_ACME_POST_CALL, new AcmeActionEvent($object));

        return $object;
    }

}