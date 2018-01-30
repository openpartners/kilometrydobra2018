<?php

namespace KdManagement\Service;

abstract class AbstractService
{
    /**
     * @var \Pimple\Container
     */
    protected $container;

    public function __construct()
    {
        global $container;

        $this->container = $container;
    }
}
