<?php

namespace KdManagement\Marshaller;

use KdManagement\Entity\CityEntity;

class ToCityEntityMarshaller extends AbstractMarshaller
{
    public function marshal(array $data)
    {
        return new CityEntity([
            'city_id'       => ($data['city']['city_id']? (int) $data['city']['city_id']:false),
            'country_id'    => $data['city']['country_id'],
            'name'          => $data['city']['name'],
            'latitude'      => $data['city']['latitude'],
            'longitude'     => $data['city']['longitude']
        ]);
    }
}
