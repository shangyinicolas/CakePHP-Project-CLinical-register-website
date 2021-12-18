<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\enquiry;
use Authorization\IdentityInterface;

/**
 * enquiry policy
 */
class enquiryPolicy
{
    /**
     * Check if $user can add enquiry
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiry $enquiry
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Enquiry $enquiry)
    { return true;
    }

    /**
     * Check if $user can edit enquiry
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiry $enquiry
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Enquiry $enquiry)
    {return true;
    }

    /**
     * Check if $user can delete enquiry
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiry $enquiry
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Enquiry $enquiry)
    {return true;
    }

    /**
     * Check if $user can view enquiry
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\enquiry $enquiry
     * @return bool
     */
    public function canView(IdentityInterface $user, Enquiry $enquiry)
    {return true;
    }
}
