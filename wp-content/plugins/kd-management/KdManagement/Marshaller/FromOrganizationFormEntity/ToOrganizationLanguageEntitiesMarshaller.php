<?php

namespace KdManagement\Marshaller\FromOrganizationFormEntity;

use KdManagement\Marshaller\AbstractMarshaller;
use KdManagement\Entity\OrganizationFormEntity;
use KdManagement\Entity\OrganizationLanguageEntity;

class ToOrganizationLanguageEntitiesMarshaller extends AbstractMarshaller
{
    /**
     * @param   OrganizationFormEntity $organizationFormEntity
     * @return  OrganizationLanguageEntity[]
     */
    public function marshal(OrganizationFormEntity $organizationFormEntity)
    {
        $organizationLanguageEntities = [];

        foreach ($organizationFormEntity->organization_languages as $languageId => $data) {
            $organizationLanguageEntities[] = new OrganizationLanguageEntity([
                'organization_id'   => $organizationFormEntity->organization_id,
                'language_id'       => $languageId,
                'name'              => $data['name'],
                'goal'              => $data['goal']
            ]);
        }

        return $organizationLanguageEntities;
    }
}
