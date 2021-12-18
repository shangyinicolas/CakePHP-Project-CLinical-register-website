<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Clinician;
use Authorization\IdentityInterface;

/**
 * Clinician policy
 */
class ClinicianPolicy
{

    public function canGraphs(IdentityInterface $user, Clinician $clinician)
    {
        $identity['can_index']=true;
        return $identity['can_index'];
    }


    /**
     * Check if $user can add Clinician
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Clinician $clinician
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Clinician $clinician)
    {
        if ($user->Role == 'admin'){
            return true;
        }
    }


    /**
     * Check if $user can edit Clinician
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Clinician $clinician
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Clinician $clinician)
    {
        return true;
    }

    /**
     * Check if $user can delete Clinician
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Clinician $clinician
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Clinician $clinician)
    {
        return true;
    }

    /**
     * Check if $user can view Clinician
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Clinician $clinician
     * @return bool
     */
    public function canView(IdentityInterface $user, Clinician $clinician)
    {
        return true;
    }

}
