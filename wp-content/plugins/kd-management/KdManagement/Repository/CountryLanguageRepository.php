<?php

namespace KdManagement\Repository;

use KdManagement\Entity\CountryLanguageEntity;

class CountryLanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_country_languages';
    protected $entityClass  = CountryLanguageEntity::class;

    public function save(CountryLanguageEntity $countryLanguageEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($countryLanguageEntity())
            ->insert($countryLanguageEntity());
    }

    public function getByCountryId($countryId)
    {
        $countryId = (int) $countryId;

        return $this->mapper()
            ->where('country_id', $countryId)
            ->get();
    }
}
