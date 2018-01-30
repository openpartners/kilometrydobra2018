<?php

namespace KdManagement\Repository;

use KdManagement\Entity\TextEntity;

class TextRepository extends AbstractRepository
{
    protected $table        = 'kdm_texts';
    protected $entityClass  = TextEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function save(TextEntity $textEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($textEntity())
            ->insert($textEntity());
    }

    public function getTextLanguagesArray()
    {
        $result = $this->queryBuilder->table('kdm_texts')
            ->select([
                'kdm_texts.label'           => 'textLanguageLabel',
                'kdm_languages.label'       => 'languageLabel',
                'kdm_text_languages.text'   => 'text'
            ])
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->leftJoin('kdm_text_languages', 'kdm_text_languages.text_id', '=', 'kdm_texts.text_id')
            ->leftJoin('kdm_languages', 'kdm_languages.language_id', '=', 'kdm_text_languages.language_id')
            ->get();

        return $this->container['array.helper']
            ->stripSlashes($result);
    }
}
