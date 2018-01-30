<?php

namespace KdManagement\Controller;

use KdManagement\ValueObject\OrganizationEditionVO;
use KdManagement\ValueObject\OrganizationStatusVO;
use KdManagement\ValueObject\OrganizationPostTypeVO;
use KdManagement\Entity\OrganizationFormEntity;

class OrganizationController extends AbstractController
{
    protected function setupActions()
    {
        add_action('admin_menu', [$this, 'postEditor']);
    }

    public function postTypeValid($postId)
    {
        $postType = get_post_type($postId);

        return in_array($postType, OrganizationPostTypeVO::$supportedPostTypes);
    }

    public function postEditor()
    {
        add_action('edit_form_advanced', function($post){
            if ($this->postTypeValid($post->ID)) {
                $this->injectForm($post->ID);
            }
        });

        add_action('save_post', function($postId){
            if ($this->postTypeValid($postId) && $postData = $_POST) {
                $this->handleSave($postData);
            }
        });

        add_action( 'edit_form_after_title', function ($post){
            if ($this->postTypeValid($post->ID)) {
                $this->injectLanguageHint($post->ID);
            }
        });
    }

    public function injectForm($organizationId)
    {
        $organizationFormEntity = $this->container['organization.service']
            ->getOrganizationForm($organizationId);

        $cities = $this->container['city.repository']->get();
        $languages = $this->container['language.repository']->get();
        $emails = $this->container['emailtemplate.repository']->get();
        $organizationFormData = $this->container['array.helper']
            ->stripSlashes($organizationFormEntity());

        usort($cities, function($a, $b) {
            return strcasecmp($a->name, $b->name);
        });

        $this->container['twig']->display('views/organization/form.twig', [
            'languages'             => $languages,
            'cities'                => $cities,
            'emails'                => $emails,
            'organizationFormData'  => $organizationFormData
        ]);
    }

    public function handleSave(array $postData)
    {
        //validation here?

        $organizationFormEntity = new OrganizationFormEntity(['organization_id' => $postData['post_ID']] + $postData['organization_form']);

        $this->container['organization.service']->saveOrganizationForm($organizationFormEntity);
    }

    public function injectLanguageHint()
    {
        $languages = $this->container['language.repository']->get();

        $this->container['twig']->display('views/organization/language_hint.twig', [
            'languages' => $languages
        ]);
    }
}
