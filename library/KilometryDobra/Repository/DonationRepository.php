<?php
namespace KilometryDobra\Repository;

use KilometryDobra\Entity\DonationEntity;

Class DonationRepository extends AbstractRepository {

    protected $table = 'wpkd_posts';

    public function getDonationsByOrganizationId($organizationId) {

        $orders = $this->getOrdersByOrganizationId($organizationId);

        if (!$orders) {
            return false;
        }
        $results = $this->mapper()
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select(\QB::raw('wpkd_posts.*, GROUP_CONCAT(wpkd_postmeta.meta_key SEPARATOR \'|||||\') as meta_keys, GROUP_CONCAT(wpkd_postmeta.meta_value SEPARATOR \'|||||\') as meta_values'))
            ->leftJoin('wpkd_postmeta', 'wpkd_postmeta.post_id', '=', 'wpkd_posts.ID')
            ->whereIn('wpkd_posts.ID', $orders)
            ->where('wpkd_posts.post_status', '=', 'publish')
            ->where('wpkd_posts.post_type', '=', 'orders')
            ->groupBy('wpkd_posts.ID')
            ->get();

        foreach ($results as $result) {
            $parsedMeta = $this->parseMeta($result['meta_keys'], $result['meta_values']);
            unset($result['meta_keys']);
            unset($result['meta_values']);
            $result = array_merge($result, $parsedMeta);
            if ($result['_status'] == 'opłacone') {
                $donations[] = $result;
            }
        }
        usort($donations, function($a, $b) {
            return $b['ID'] - $a['ID'];
        });

        return $donations;
    }

    public function getDonations()
    {
        $results = $this->mapper()
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select(\QB::raw('wpkd_posts.*, GROUP_CONCAT(wpkd_postmeta.meta_key SEPARATOR \'|||||\') as meta_keys, GROUP_CONCAT(wpkd_postmeta.meta_value SEPARATOR \'|||||\') as meta_values'))
            ->leftJoin('wpkd_postmeta', 'wpkd_postmeta.post_id', '=', 'wpkd_posts.ID')
            ->where('wpkd_posts.post_status', '=', 'publish')
            ->where('wpkd_posts.post_type', '=', 'orders')
            ->groupBy('wpkd_posts.ID')
            ->get();
        foreach ($results as $result) {
            $parsedMeta = $this->parseMeta($result['meta_keys'], $result['meta_values']);
            unset($result['meta_keys']);
            unset($result['meta_values']);
            $result = array_merge($result, $parsedMeta);
            if ($result['_status'] == 'opłacone') {
                $donations[$result['_organizationId']][] = $result;
            }
        }

        return $donations;
    }

    public function getRawDonations()
    {
        $results = $this->mapper()
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select(\QB::raw('wpkd_posts.*, GROUP_CONCAT(wpkd_postmeta.meta_key SEPARATOR \'|||||\') as meta_keys, GROUP_CONCAT(wpkd_postmeta.meta_value SEPARATOR \'|||||\') as meta_values'))
            ->leftJoin('wpkd_postmeta', 'wpkd_postmeta.post_id', '=', 'wpkd_posts.ID')
            ->where('wpkd_posts.post_status', '=', 'publish')
            ->where('wpkd_posts.post_type', '=', 'orders')
            ->where(\QB::raw('wpkd_posts.ID IN (SELECT post_id FROM wpkd_postmeta WHERE meta_key = "_status" AND meta_value = "opłacone")'))
            ->orderBy('wpkd_posts.ID', 'ASC')
            ->groupBy('wpkd_posts.ID')
            ->get();

        foreach ($results as $result) {
            $parsedMeta = $this->parseMeta($result['meta_keys'], $result['meta_values']);
            unset($result['meta_keys']);
            unset($result['meta_values']);
            $result = array_merge($result, $parsedMeta);
            $donations[] = $result;
        }

        return $donations;
    }

    public function getOrdersByOrganizationId($organizationId)
    {
        $orders = $this->queryBuilder
            ->table('wpkd_postmeta')
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select('post_id')
            ->where('meta_key', '=', '_organizationId')
            ->where('meta_value', '=', $organizationId)
            ->get();

        return array_column($orders, 'post_id');
    }
}
