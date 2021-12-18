<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\CliniciansTable;
use Authorization\IdentityInterface;

/**
 * CliniciansTable policy
 */
class CliniciansTablePolicy
{
    public function scopeIndex($user, $query)
    {
        return $query->where(['Clinicians.Email' => $user->Email]);
    }

    public function canIndex(IdentityInterface $identity)
    {
        $identity['can_index']=true;
        return $identity['can_index'];
    }



}
