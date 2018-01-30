<?php

namespace KdManagement\Controller;

abstract class AbstractController
{
    /**
     * @var \Pimple\Container
     */
    protected $container;

    abstract protected function setupActions();

    public function __construct()
    {
        global $container;

        $this->container = $container;
        $this->setupActions();
    }

    protected function redirect($url)
    {
        $string = '<script type="text/javascript">';
        $string .= 'window.location = "' . $url . '"';
        $string .= '</script>';

        echo $string;
        exit;
    }
}
