<?php

namespace KdManagement\Repository;

use KdManagement\Query\OrganizationQuery;
use KdManagement\Entity\OrganizationEntity;
use KdManagement\ValueObject\EditionPostTypeVO;
use KdManagement\ValueObject\OrganizationStatusVO;

class OrganizationRepository extends AbstractRepository
{
    protected $table        = 'kdm_organizations';
    protected $entityClass  = OrganizationEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function save(OrganizationEntity $organizationEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($organizationEntity())
            ->insert($organizationEntity());
    }

    public function getFirstByOrganizationId($organizationId)
    {
        $organizationId = (int) $organizationId;

        return $this->mapper()
            ->where('organization_id', $organizationId)
            ->first();
    }

    private function getOrganizationQuery()
    {
        return (new OrganizationQuery);
    }

    public function getOrganizationList($edition, $languageLabel = '')
    {
        $result = $this->getOrganizationQuery()
            ->baseQuery($languageLabel)
            ->setEdition($edition)
            ->setStatus(OrganizationStatusVO::ACTIVE)
            ->orderBy(\QB::raw('kdm_city_languages.name COLLATE utf8_polish_ci'))
            ->get();

        return $this->container['array.helper']
            ->stripSlashes($result);
    }

    public function getOrganizationRanking($edition, $languageLabel = '')
    {
        $result = $this->getOrganizationQuery()
            ->baseQuery($languageLabel)
            ->setEdition($edition)
            ->setStatus(OrganizationStatusVO::ACTIVE)
            ->where('kdm_organizations.organization_id', '<>', 7415)
            ->orderBy(\QB::raw('kdm_city_languages.name COLLATE utf8_polish_ci'))
            ->get();

        return $this->container['array.helper']
            ->stripSlashes($result);
    }

    /**
     * @todo przenieść do aggregate i ogarnąc nazewnictwo
     */
    public function getFirstOrganizationAggregateByOrganizationId($organizationId, $languageLabel = '')
    {
        $result = $this->getOrganizationQuery()
            ->baseQuery($languageLabel)
            ->where('kdm_organizations.organization_id', (int) $organizationId)
            ->first();

        return $this->container['array.helper']
            ->stripSlashes($result);
    }

    public function getFirstByBlueMediaServiceId($bluemediaServiceId)
    {
        return $this->mapper()
            ->where('bm_service_id', (int) $bluemediaServiceId)
            ->first();
    }
}
