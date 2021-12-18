<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\AdminTable;
use Authorization\IdentityInterface;

/**
 * Admin policy
 */
class AdminTablePolicy
{
    public function scopeIndex($user, $query)
    {
        return $query->where(['Admin.email' => $user->Email]);
    }

    public function canIndex(IdentityInterface $identity)
    {
        $identity['can_index']=true;
        return $identity['can_index'];
    }
}
