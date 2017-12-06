<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Curso;

class CursoPolicy extends Policy
{
    public function update(User $user, Curso $curso)
    {
        // return $curso->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Curso $curso)
    {
        return true;
    }
}
