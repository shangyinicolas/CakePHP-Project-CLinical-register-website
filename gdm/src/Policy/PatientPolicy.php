<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Patient;
use Authorization\IdentityInterface;


/**
 * Patient policy
 */
class PatientPolicy
{


    /**
     * Check if $user can add Patient
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Patient $patient
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Patient $patient)
    {
        if ($user->Role == 'admin'){
            return true;
        }
    }

    /**
     * Check if $user can edit Patient
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Patient $patient
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Patient $patient)
    {
        if ($user->Role == 'admin'){
            return true;
        }

        if ($user->Role == 'patient'){
            return true;
        }

        if ($user->Role == 'clinician'){
            return true;
        }
    }

    /**
     * Check if $user can delete Patient
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Patient $patient
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Patient $patient)
    {
        return false;
    }

    /**
     * Check if $user can view Patient
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Patient $patient
     * @return bool
     */
    public function canView(IdentityInterface $user, Patient $patient)
    {
        return $this->isPatient($user, $patient);
    }

    protected function isPatient(IdentityInterface $user, Patient $patient)
    {
        return $patient->email === $user->getIdentifier();
    }
}
