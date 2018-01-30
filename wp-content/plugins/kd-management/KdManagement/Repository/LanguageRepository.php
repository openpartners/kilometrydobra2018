<?php

namespace KdManagement\Repository;

use KdManagement\Entity\LanguageEntity;

class LanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_languages';
    protected $entityClass  = LanguageEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function getFirstByLabel($label)
    {
        return $this->mapper()
            ->where('label', $label)
            ->first();
    }
}
