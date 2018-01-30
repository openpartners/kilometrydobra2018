<?php

namespace KdManagement\Service;

class CityService extends AbstractService
{
    public function save(array $data)
    {
        $cityEntity = $this->container['tocityentity.marshaller']
            ->marshal($data);

        $textLanguagesEntities = $this->container['tocitylanguageentities.marshaller']
            ->marshal($data);

        $this->container['city.repository']
            ->save($cityEntity);

        foreach ($textLanguagesEntities as $textLanguageEntity) {
            $this->container['citylanguage.repository']
                ->save($textLanguageEntity);
        }
    }
}
