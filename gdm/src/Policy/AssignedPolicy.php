<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\assigned;
use Authorization\IdentityInterface;

/**
 * assigned policy
 */
class assignedPolicy
{
    /**
     * Check if $user can add assigned
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\assigned $assigned
     * @return true;
     */
    public function canAdd(IdentityInterface $user, assigned $assigned)
    {
        if ($user->Role == 'admin'){
            return true;
        }
    }

    /**
     * Check if $user can edit assigned
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\assigned $assigned
     * @return true;
     */
    public function canEdit(IdentityInterface $user, assigned $assigned)
    {
        return true;
    }

    /**
     * Check if $user can delete assigned
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\assigned $assigned
     * @return true;
     */
    public function canDelete(IdentityInterface $user, assigned $assigned)
    {
        return true;
    }

    /**
     * Check if $user can view assigned
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\assigned $assigned
     * @return true;
     */
    public function canView(IdentityInterface $user, assigned $assigned)
    {
       return true;
    }
}
