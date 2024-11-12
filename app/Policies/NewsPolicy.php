<?php

namespace App\Policies;

use App\Models\User;

class NewsPolicy
{
    public function updateStatus(User $user)
        {
            return $user->hasRole('admin');
        }

}
