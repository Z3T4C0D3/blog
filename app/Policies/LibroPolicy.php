<?php

namespace App\Policies;

use App\Models\User;
use App\Models\libros;
use Illuminate\Auth\Access\HandlesAuthorization;


class LibroPolicy
{
    use HandlesAuthorization;

    public function author(User $user, libros $libro)
    {
        if ($user->id == $libro->user_id) {
            return true;
        }else {
            return false;
        }
    }
}
