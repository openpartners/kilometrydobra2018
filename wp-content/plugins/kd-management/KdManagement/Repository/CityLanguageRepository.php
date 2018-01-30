<?php

namespace KdManagement\Repository;

use KdManagement\Entity\CityLanguageEntity;

class CityLanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_city_languages';
    protected $entityClass  = CityLanguageEntity::class;

    public function save(CityLanguageEntity $cityLanguageEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($cityLanguageEntity())
            ->insert($cityLanguageEntity());
    }

    public function getByCityId($cityId)
    {
        $cityId = (int) $cityId;

        return $this->mapper()
            ->where('city_id', $cityId)
            ->get();
    }
}
