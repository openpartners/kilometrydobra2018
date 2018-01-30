<?php

namespace KdManagement\Service;

use KdManagement\Traits\DatabaseTrait;
use KdManagement\Entity\TextsFormEntity;
use KdManagement\Entity\TextLanguageEntity;

class TextService extends AbstractService
{
    use DatabaseTrait;

    public function saveTextsForm(TextsFormEntity $textsFormEntity)
    {
        foreach ($textsFormEntity as $languageId => $texts) {
            foreach ($texts as $textId => $text) {
                $textLanguageEntity = new TextLanguageEntity([
                    'text_id' => $textId,
                    'language_id' => $languageId,
                    'text' => $text
                ]);

                $this->container['textlanguage.repository']
                    ->save($textLanguageEntity);
            }
        }
    }

    public function getTextsForm()
    {
        $textLanguages = $this->container['textlanguage.repository']
            ->get();

        $formData = [];

        foreach ($textLanguages as $textLanguage) {
            $formData[$textLanguage->language_id][$textLanguage->text_id] = $textLanguage->text;
        }

        return new TextsFormEntity($formData);
    }

    public function getTextLanguagesArray()
    {
        $textLanguagesArray = [];

        $textLanguages = $this->container['text.repository']
            ->getTextLanguagesArray();

        foreach ($textLanguages as $textLanguage) {
            $textLanguagesArray[$textLanguage['textLanguageLabel']]
                [$textLanguage['languageLabel']] = $textLanguage['text'];
        }

        return $textLanguagesArray;
    }
}
