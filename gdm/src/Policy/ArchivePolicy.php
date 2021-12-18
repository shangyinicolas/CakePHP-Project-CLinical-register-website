<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\archive;
use Authorization\IdentityInterface;

/**
 * archive policy
 */
class archivePolicy
{
    /**
     * Check if $user can add archive
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\archive $archive
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Archive $archive)
    {
        return true;
    }

    /**
     * Check if $user can edit archive
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\archive $archive
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Archive $archive)
    {
        return true;
    }

    /**
     * Check if $user can delete archive
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\archive $archive
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Archive $archive)
    {
        return true;
    }

    /**
     * Check if $user can view archive
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\archive $archive
     * @return bool
     */
    public function canView(IdentityInterface $user, Archive $archive)
    {
        return true;
    }
}
