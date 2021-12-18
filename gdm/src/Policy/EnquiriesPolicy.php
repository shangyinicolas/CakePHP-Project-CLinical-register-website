<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\enquiries;
use Authorization\IdentityInterface;

/**
 * enquiries policy
 */
class enquiriesPolicy
{
    /**
     * Check if $user can add enquiries
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiries $enquiries
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Enquiries $enquiries)
    {return true;
    }

    /**
     * Check if $user can edit enquiries
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiries $enquiries
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Enquiries $enquiries)
    { return true;
    }

    /**
     * Check if $user can delete enquiries
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiries $enquiries
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Enquiries $enquiries)
    {return true;
    }

    /**
     * Check if $user can view enquiries
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiries $enquiries
     * @return bool
     */
    public function canView(IdentityInterface $user, Enquiries $enquiries)
    {return true;
    }
}
