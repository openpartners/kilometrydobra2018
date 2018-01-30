<?php

namespace KdManagement\Service;

class UserService extends AbstractService
{
    public function getUserRoles($userId)
    {
        $userRoles = $this->container['user.repository']
            ->getUserRoles($userId);

        $result = [];

        foreach ($userRoles as $userRole) {
            $result[$userRole->role_name][] = $userRole->obj_or_term_id;
        }

        return $result;
    }
}
