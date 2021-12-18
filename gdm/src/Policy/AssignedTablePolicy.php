<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\AssignedTable;
use Authorization\IdentityInterface;

/**
 * AssignedTable policy
 */
class AssignedTablePolicy
{
    /**
     * Check if $user can add AssignedTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AssignedTable $assignedTable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, AssignedTable $assignedTable)
    {
        return true;
    }

    /**
     * Check if $user can edit AssignedTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AssignedTable $assignedTable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, AssignedTable $assignedTable)
    {
        return true;
    }

    /**
     * Check if $user can delete AssignedTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AssignedTable $assignedTable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, AssignedTable $assignedTable)
    {
        return true;
    }

    /**
     * Check if $user can view AssignedTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AssignedTable $assignedTable
     * @return bool
     */
    public function canView(IdentityInterface $user, AssignedTable $assignedTable)
    {
        return true;
    }

    public function canIndex(IdentityInterface $identity)
    {
        return true;
    }
}
