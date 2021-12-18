<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Admin;
use Authorization\IdentityInterface;

/**
 * Admin policy
 */
class AdminPolicy
{
    /**
     * Check if $user can add Admin
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Admin $admin
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Admin $admin)
    {
        return true;
    }

    /**
     * Check if $user can edit Admin
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Admin $admin
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Admin $admin)
    {
        return true;
    }

    /**
     * Check if $user can delete Admin
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Admin $admin
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Admin $admin)
    {
        return true;
    }

    /**
     * Check if $user can view Admin
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Admin $admin
     * @return bool
     */
    public function canView(IdentityInterface $user, Admin $admin)
    {
        return true;
    }

}
