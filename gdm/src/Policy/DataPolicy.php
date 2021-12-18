<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\data;
use Authorization\IdentityInterface;

/**
 * data policy
 */
class dataPolicy
{
    /**
     * Check if $user can add data
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\data $data
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Data $data)
    {
        return true;
    }
    public function canIndex(IdentityInterface $user, Data $data)
    {
        return true;
    }
    /**
     * Check if $user can edit data
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\data $data
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Data $data)
    {
        return true;
    }

    /**
     * Check if $user can delete data
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\data $data
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Data $data)
    {
        return true;
    }

    /**
     * Check if $user can view data
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\data $data
     * @return bool
     */
    public function canView(IdentityInterface $user, Data $data)
    {
        return true;
    }
}
