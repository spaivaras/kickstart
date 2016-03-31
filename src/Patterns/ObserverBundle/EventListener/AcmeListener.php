<?php

namespace Patterns\ObserverBundle\EventListener;

use Patterns\ObserverBundle\Event\AcmeActionEvent;

class AcmeListener
{
    public function proccess(AcmeActionEvent $event)
    {
        $object = $event->getObject();
        $object->title = 'New title!';
    }
}