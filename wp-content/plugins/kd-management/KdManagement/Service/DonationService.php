<?php

namespace KdManagement\Service;

use KilometryDobra\Repository\OrganizationRepository;
use KilometryDobra\Repository\DonationRepository;

Class DonationService extends AbstractService {

    public function getDonationsList($edition, $languageLabel, $limit = NULL, $offset = 0)
    {
        $organizations = $this->container['organization.repository']->getOrganizationList($edition, $languageLabel);


        $donations = $this->container['donation.repository']->getRawDonations($edition);

        foreach ($donations as &$donation) {
            $key = array_search(@$donation['_organizationId'], array_column($organizations, 'organizationId'));

            $target = $organizations[$key]['organizationName'];

            /**
             * fast workaround @FIXME
             */
            if (is_null($target)) {
                $target = 'Polski Instytut Filantropii';
            }
            $donation['_target'] = $target;
        }

        $donations = array_reverse($donations, true);

        if ($limit || $offset) {
            $donations = array_slice($donations, $offset, $limit, true);
        }

        return $donations;
    }
}
