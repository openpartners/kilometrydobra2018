<?php
namespace KilometryDobra\Service;

use KilometryDobra\Repository\OrganizationRepository;
use KilometryDobra\Repository\DonationRepository;

Class OrganizationService extends AbstractService {

    public function getOrganizationsRanking($edition = false)
    {
        $organizationRepository = new OrganizationRepository();
        $donationRepository = new DonationRepository();

        $organizations = $organizationRepository->getOrganizations($edition);
        $donations = $donationRepository->getDonations();

        foreach ($organizations as $id => $organization) {
            $organizations[$id]['total_donations'] = array_sum(array_column($donations[$id], '_price'));
        }

        return $organizations;
    }
}
