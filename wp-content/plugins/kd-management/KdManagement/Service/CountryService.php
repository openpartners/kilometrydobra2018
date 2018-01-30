<?php

namespace KdManagement\Service;

class CountryService extends AbstractService
{
    public function save(array $data)
    {
        $countryEntity = $this->container['tocountryentity.marshaller']
            ->marshal($data);

        $textLanguagesEntities = $this->container['tocountrylanguageentities.marshaller']
            ->marshal($data);

        $this->container['country.repository']
            ->save($countryEntity);

        foreach ($textLanguagesEntities as $textLanguageEntity) {
            $this->container['countrylanguage.repository']
                ->save($textLanguageEntity);
        }
    }

    public function getCountryFlagImage($countryId)
    {
        $countryEntity = $this->container['country.repository']
            ->getFirstByCountryId($countryId);

        return $countryEntity->flag_img_url;
    }
}
