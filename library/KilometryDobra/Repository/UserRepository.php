<?php
namespace KilometryDobra\Repository;

Class UserRepository extends AbstractRepository {

    protected $table = 'wpkd_users';

    public function getOrganizationsAccessByUserId($userId) {
        $result =  $this->mapper()
                        ->select('wpkd_user2role2object_rs.obj_or_term_id')
                        ->leftJoin('wpkd_user2role2object_rs', 'wpkd_user2role2object_rs.user_id', '=', 'wpkd_users.ID')
                        ->where('ID', '=', $userId)
                        ->where('wpkd_user2role2object_rs.role_name', '=', 'organization_editor')
                        ->get();

        $result = array_map(function($a){
            return $a->obj_or_term_id;
        }, $result);

        return $result;
    }
}
