<?php
namespace KilometryDobra\Repository;


Class ApplicationRepository extends AbstractRepository {

    protected $table = 'wpkd_posts';

    public function getApplications()
    {
        $results = $this->mapper()
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->select(\QB::raw('wpkd_posts.*, GROUP_CONCAT(wpkd_postmeta.meta_key SEPARATOR \'|||||\') as meta_keys, GROUP_CONCAT(wpkd_postmeta.meta_value SEPARATOR \'|||||\') as meta_values'))
            ->leftJoin('wpkd_postmeta', 'wpkd_postmeta.post_id', '=', 'wpkd_posts.ID')
            ->where('wpkd_posts.post_status', '=', 'publish')
            ->where('wpkd_posts.post_type', '=', 'applications')
            ->groupBy('wpkd_posts.ID')
            ->get();


        $results = $this->parseResult($results);
        return $this->filterApplications($results);
    }

    private function filterApplications($applications)
    {
        usort($applications, function($a){
            return preg_match('/Hearts WorldWide/', $a['_organizationName']);
        });
        
        return $applications;
    }
}
