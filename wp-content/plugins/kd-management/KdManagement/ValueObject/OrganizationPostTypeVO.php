<?php

namespace KdManagement\ValueObject;

class OrganizationPostTypeVO
{
    public static $supportedPostTypes = [
        'organization_2017'
    ];

    public static $postTypeToEdition = [
        'organization_2017' => 2017
    ];

    public static $editionToPostType = [
        2017 => 'organization_2017'
    ];
}
