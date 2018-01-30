<?php

namespace KdManagement\Service;

class MapMarkerService extends AbstractService
{
    public function getOrganizationsMapMarkers($edition, $languageLabel)
    {
        $organizations = $this->container['organization.repository']
            ->getOrganizationList($edition, $languageLabel);

        $countries = [];
        $cities = [];


        foreach ($organizations as $organization) {
            $countries[$organization['countryId']] = [
                'type'      => 'major',
                'lat'       => (float) $organization['countryLatitude'],
                'lng'       => (float) $organization['countryLongitude'],
                'centerLat' => (float) $organization['countryLatitude'],
                'centerLng' => (float) $organization['countryLongitude']
            ];

            $cities[$organization['cityId']] = [
                'type'          => 'minor',
                'id'            => $organization['organizationId'],
                'guid'          => $organization['organizationPage'],
                'name'          => $organization['organizationName'],
                'description'   => $organization['organizationGoal'],
                'logo'          => $organization['organizationLogo'],
                'city'          => $organization['cityName'],
                'lat'           => (float) $organization['cityLatitude'],
                'lng'           => (float) $organization['cityLongitude'],
            ];
        }
        
        return array_merge($cities, $countries);
    }
}
