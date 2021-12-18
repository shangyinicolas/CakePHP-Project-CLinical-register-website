<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\enquiriestable;
use Authorization\IdentityInterface;

/**
 * enquiriestable policy
 */
class enquiriestablePolicy
{
    /**
     * Check if $user can add enquiriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiriestable $enquiriestable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Enquiriestable $enquiriestable)
    {return true;
    }

    /**
     * Check if $user can edit enquiriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiriestable $enquiriestable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Enquiriestable $enquiriestable)
    {return true;
    }

    /**
     * Check if $user can delete enquiriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiriestable $enquiriestable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Enquiriestable $enquiriestable)
    {return true;
    }

    /**
     * Check if $user can view enquiriestable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiriestable $enquiriestable
     * @return bool
     */
    public function canView(IdentityInterface $user, Enquiriestable $enquiriestable)
    {return true;
    }
    public function scopeIndex($user, $query)
    {
        return $query->where(['enquiries.email' => $user->Email]);
    }
    public function canIndex(IdentityInterface $identity)
    {
        $identity['can_index']=true;
        return $identity['can_index '];
    }
}
