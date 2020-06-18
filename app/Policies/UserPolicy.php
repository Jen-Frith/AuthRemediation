<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mineOrAdmin(User $user,User $me){
       
            if ($user->id == $me->id || $user->role_id==1 ) {
                return true;
            } 
        
    }
}
