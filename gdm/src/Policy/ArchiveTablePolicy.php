<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ArchiveTable;
use Authorization\IdentityInterface;

/**
 * ArchiveTable policy
 */
class ArchiveTablePolicy
{
    /**
     * Check if $user can add ArchiveTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArchiveTable $archiveTable
     * @return bool
     */


    public function canIndex(IdentityInterface $identity)
    {
        $identity['can_index']=true;
        return $identity['can_index'];
    }

}
