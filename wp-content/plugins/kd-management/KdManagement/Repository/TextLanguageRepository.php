<?php

namespace KdManagement\Repository;

use KdManagement\Entity\TextLanguageEntity;

class TextLanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_text_languages';
    protected $entityClass  = TextLanguageEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function save(TextLanguageEntity $textLanguageEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($textLanguageEntity())
            ->insert($textLanguageEntity());
    }
}
