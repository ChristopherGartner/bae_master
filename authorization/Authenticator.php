<?php

namespace authorization;

use user\Employee;

/**
 * Class used for managing roles and rights
 */
class Authenticator
{
    /**
     * Checks whether a given Employee has a dedicated right
     *
     * @param Employee $user
     * @param Right $right
     * @return bool
     */
    public function hasRight(Employee $user, Right $right): bool
    {
        /**
         *  @var Right $userRight
         */
        foreach ($user->getRights() as $userRight) {
            if($userRight->getid() === $right->getid()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks whether a given Employee has a dedicated role
     *
     * @param Employee $user
     * @param Role $role
     * @return bool
     */
    public function hasRole(Employee $user, Role $role): bool
    {
        /**
         * @var Role $userRole
         */
        foreach ($user->getRoles() as $userRole) {
            if($userRole->getId() === $role->getId()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks whether a role has a specific right
     *
     * @param Role $role
     * @param Right $right
     * @return bool
     */
    public function roleHasRight(Role $role, Right $right): bool
    {
        /**
         * @var Right $roleRight
         */
        foreach ($role->getRights() as $roleRight) {
            if($roleRight->getid() === $right->getid()) {
                return true;
            }
        }
        return false;
    }
}