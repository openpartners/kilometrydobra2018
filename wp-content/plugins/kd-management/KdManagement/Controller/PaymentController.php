<?php

namespace KdManagement\Controller;

use KdManagement\ValueObject\OrganizationPostTypeVO;
use KdManagement\ValueObject\PaymentPostTypeVO;

class PaymentController extends AbstractController
{
    protected function setupActions()
    {
        add_action('admin_menu', [$this, 'postEditor']);
    }

    public function postTypeValid($postId)
    {
        $postType = get_post_type($postId);

        return $postType == PaymentPostTypeVO::PAYMENT_POST;
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
    }

    public function injectForm($paymentId)
    {
        $userId = get_current_user_id();

        $userRoles = $this->container['user.service']
            ->getUserRoles($userId);

        $organizations = $this->container['organization.repository']
            ->getOrganizationList(2017, 'pl');

        $organizationList = [
            [
                'name' => 'wybierz organizację',
                'value' => 0
            ]
        ];

        $currentUser = wp_get_current_user();

        foreach ($organizations as $organization) {
            if (in_array('administrator', $currentUser->roles) || in_array($organization['organizationId'], $userRoles['organization_2017_editor'])) {
                $organizationList[] = [
                    'value' => $organization['organizationId'],
                    'name'  => $organization['cityName'] . ' - ' . $organization['organizationName']
                ];
            }
        }

        $organizationId = get_post_meta($paymentId, '_organizationId', true);

        $paymentFormData = [
            'organization_id' => $organizationId
        ];

        $this->container['twig']->display('views/payment/form.twig', [
            'organizations' => $organizationList,
            'paymentFormData' => $paymentFormData
        ]);
    }

    public function handleSave(array $postData)
    {
        $userId = get_current_user_id();

        $userRoles = $this->container['user.service']
            ->getUserRoles($userId);

        $currentUser = wp_get_current_user();

        $edition = (int) @OrganizationPostTypeVO::$postTypeToEdition[get_post_type($postData['payment_form']['organization_id'])];

        if ($edition) {
            update_post_meta($postData['post_ID'], '_edition', $edition);
        }

        if (in_array('administrator', $currentUser->roles) || in_array($postData['payment_form']['organization_id'], $userRoles['organization_2017_editor'])) {
            update_post_meta($postData['post_ID'], '_organizationId', $postData['payment_form']['organization_id']);
        }
    }

}
