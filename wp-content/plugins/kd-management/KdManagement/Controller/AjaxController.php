<?php

namespace KdManagement\Controller;

class AjaxController extends AbstractController
{
    protected function setupActions()
    {
        add_action('wp_ajax_getOrganizationsMapMarkers', [$this, 'getOrganizationsMapMarkers']);
        add_action('wp_ajax_nopriv_getOrganizationsMapMarkers', [$this, 'getOrganizationsMapMarkers']);
    }

    public function getOrganizationsMapMarkers()
    {
        $edition = (int) $_GET['edition'];

    	$markers = $this->container['mapmarker.service']
    		->getOrganizationsMapMarkers($edition, LANG);

    	die(json_encode($markers));
    }
}
