<?php
namespace KilometryDobra\Repository;

use KilometryDobra\Entity\OrganizationEntity;
use KilometryDobra\Entity\DonationEntity;

Class OrganizationRepository extends AbstractRepository {

    protected $table = 'wpkd_posts';

    public function getOrganizations($edition = false) {
        $results = $this->mapper()
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select(\QB::raw('wpkd_posts.*, GROUP_CONCAT(wpkd_postmeta.meta_key SEPARATOR \'|||||\') as meta_keys, GROUP_CONCAT(wpkd_postmeta.meta_value SEPARATOR \'|||||\') as meta_values'))
            ->leftJoin('wpkd_postmeta', 'wpkd_postmeta.post_id', '=', 'wpkd_posts.ID')
            ->where('wpkd_posts.post_status', '=', 'publish')
            ->where('wpkd_posts.ID', '<>', 266)
            ->where('wpkd_posts.post_type', '=', 'organization')
            ->groupBy('wpkd_posts.ID')
            ->get();

        foreach ($results as $result) {
            $parsedMeta = $this->parseMeta($result['meta_keys'], $result['meta_values']);
            unset($result['meta_keys']);
            unset($result['meta_values']);
            $result = array_merge($result, $parsedMeta);

            if ($edition && $result['_edition'] != $edition) {
                continue;
            }

            $organizations[$result['ID']] = $result;
        }

        return $organizations;
    }
}
