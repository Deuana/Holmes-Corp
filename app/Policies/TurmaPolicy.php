<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Turma;

class TurmaPolicy extends Policy
{
    public function update(User $user, Turma $turma)
    {
        // return $turma->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Turma $turma)
    {
        return true;
    }
}
