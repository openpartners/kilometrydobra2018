<?php

namespace KdManagement\Marshaller;

use KdManagement\Entity\CityLanguageEntity;

class ToCityLanguageEntitiesMarshaller extends AbstractMarshaller
{
    public function marshal(array $data)
    {
        $result = [];

        foreach ($data['city']['text_languages'] as $langKey => $textLanguage) {
            $result[] = new CityLanguageEntity([
                'city_id'       => (int) $data['city']['city_id'],
                'language_id'   => (int) $langKey,
                'name'          => $textLanguage
            ]);
        }

        return $result;
    }
}
