<?php

namespace Patterns\AdapterBundle\Service;

class ImportEngine
{
    /**
     * @var array
     */
    private $drivers = [];

    public function __construct(EngineDriverInterface $driver)
    {
        $this->driver[] = $driver;
    }

    public function addDriver(EngineDriverInterface $driver)
    {
        $this->driver[] = $driver;
    }

    public function doImport()
    {
        foreach ($this->drivers as $driver) {
            $driver->import();
        }
    }
}