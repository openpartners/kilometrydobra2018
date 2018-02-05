<?php
namespace KilometryDobra\Service;

use KilometryDobra\Repository\OrganizationRepository;
use KilometryDobra\Repository\DonationRepository;

Class DonationService extends AbstractService {

    public function getDonationsList($limit = NULL, $offset = 0)
    {
        $organizationRepository = new OrganizationRepository();
        $donationRepository = new DonationRepository();

        $organizations = $organizationRepository->getOrganizations();
        $donations = $donationRepository->getRawDonations();

        foreach ($donations as &$donation) {
            $target = $organizations[$donation['_organizationId']]['post_title'];

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
