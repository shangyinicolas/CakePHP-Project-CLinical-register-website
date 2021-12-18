<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\PatientsTable;
use Authorization\IdentityInterface;

/**
 * Patients policy
 */
class PatientsTablePolicy
{
    public function scopeIndex($user, $query)
    {
        return $query->where(['Patients.Email' => $user->Email]);
    }

    public function canIndex(IdentityInterface $identity)
    {
        $identity['can_index']=true;
        return $identity['can_index'];
    }
}
