<?php

namespace KdManagement\Repository;

use KdManagement\Entity\UserEntity;

class UserRepository extends AbstractRepository
{
    protected $table        = 'wpkd_users';
    protected $entityClass  = UserEntity::class;

    public function getUserRoles($userId)
    {
        return $this->queryBuilder
            ->table('wpkd_user2role2object_rs')
            ->where('wpkd_user2role2object_rs.user_id', '=', $userId)
            ->get();
    }
}
