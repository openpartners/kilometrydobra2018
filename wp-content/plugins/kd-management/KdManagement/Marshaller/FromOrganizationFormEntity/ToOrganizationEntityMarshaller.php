<?php

namespace KdManagement\Marshaller\FromOrganizationFormEntity;

use KdManagement\Marshaller\AbstractMarshaller;
use KdManagement\Entity\OrganizationFormEntity;
use KdManagement\Entity\OrganizationEntity;

class ToOrganizationEntityMarshaller extends AbstractMarshaller
{
    /**
     * @param   OrganizationFormEntity $organizationFormEntity
     * @return  OrganizationEntity
     */
    public function marshal(OrganizationFormEntity $organizationFormEntity)
    {
        return new OrganizationEntity([
            'organization_id'   => $organizationFormEntity->organization_id,
            'city_id'           => $organizationFormEntity->city_id,
            'bm_service_id'     => $organizationFormEntity->bm_service_id,
            'bm_key'            => $organizationFormEntity->bm_key,
            'paypal_email'      => $organizationFormEntity->paypal_email,
            'logo_img_url'      => $organizationFormEntity->logo_img_url,
            'website_url'       => $organizationFormEntity->website_url
        ]);
    }
}
