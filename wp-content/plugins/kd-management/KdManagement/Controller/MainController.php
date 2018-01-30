<?php

namespace KdManagement\Controller;

class MainController extends AbstractController
{
    protected function setupActions()
    {
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    public function adminMenu()
    {
        add_menu_page(
            'Zarządzanie',
            'Zarządzanie',
            'kdm_admin',
            'kdm_index',
            [$this, 'index'],
            'dashicons-media-text',
            2
        );
    }

    public function index()
    {
        $this->container['twig']->display('views/main/index.twig');
    }
}
