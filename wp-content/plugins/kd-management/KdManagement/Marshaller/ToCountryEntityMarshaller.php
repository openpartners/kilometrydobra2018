<?php

namespace KdManagement\Marshaller;

use KdManagement\Entity\CountryEntity;

class ToCountryEntityMarshaller extends AbstractMarshaller
{
    public function marshal(array $data)
    {
        return new CountryEntity([
            'country_id'    => ($data['country']['country_id']? (int) $data['country']['country_id']:false),
            'name'          => $data['country']['name'],
            'latitude'      => $data['country']['latitude'],
            'longitude'     => $data['country']['longitude'],
            'flag_img_url'  => $data['country']['flag_img_url']
        ]);
    }
}
