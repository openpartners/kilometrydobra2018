<?php

namespace KdManagement\Marshaller;

use KdManagement\Entity\CountryLanguageEntity;

class ToCountryLanguageEntitiesMarshaller extends AbstractMarshaller
{
    public function marshal(array $data)
    {
        $result = [];

        foreach ($data['country']['text_languages'] as $langKey => $textLanguage) {
            $result[] = new CountryLanguageEntity([
                'country_id'    => (int) $data['country']['country_id'],
                'language_id'   => (int) $langKey,
                'name'          => $textLanguage
            ]);
        }

        return $result;
    }
}
