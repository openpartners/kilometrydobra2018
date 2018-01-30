<?php

namespace KdManagement\Repository;

use KdManagement\Entity\OrganizationLanguageEntity;

class OrganizationLanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_organization_languages';
    protected $entityClass  = OrganizationLanguageEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function save(OrganizationLanguageEntity $organizationLanguageEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($organizationLanguageEntity())
            ->insert($organizationLanguageEntity());
    }

    public function getByOrganizationId($organizationId)
    {
        $organizationId = (int) $organizationId;

        return $this->mapper()
            ->where('organization_id', $organizationId)
            ->get();
    }
}
