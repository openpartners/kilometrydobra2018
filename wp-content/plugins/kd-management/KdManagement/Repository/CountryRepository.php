<?php

namespace KdManagement\Repository;

use KdManagement\Entity\CountryEntity;

class CountryRepository extends AbstractRepository
{
    protected $table        = 'kdm_countries';
    protected $entityClass  = CountryEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function getFirstByCountryId($countryId)
    {
        $countryId = (int) $countryId;

        return $this->mapper()
            ->where('country_id', $countryId)
            ->first();
    }

    public function save(CountryEntity $countryEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($countryEntity())
            ->insert($countryEntity());
    }
}
