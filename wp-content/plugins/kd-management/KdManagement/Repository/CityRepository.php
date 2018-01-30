<?php

namespace KdManagement\Repository;

use KdManagement\Entity\CityEntity;

class CityRepository extends AbstractRepository
{
    protected $table        = 'kdm_cities';
    protected $entityClass  = CityEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function getFirstByCityId($cityId)
    {
        $cityId = (int) $cityId;

        return $this->mapper()
            ->where('city_id', $cityId)
            ->first();
    }

    public function save(CityEntity $cityEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($cityEntity())
            ->insert($cityEntity());
    }
}
