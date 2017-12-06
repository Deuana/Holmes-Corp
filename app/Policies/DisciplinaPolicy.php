<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Disciplina;

class DisciplinaPolicy extends Policy
{
    public function update(User $user, Disciplina $disciplina)
    {
        // return $disciplina->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Disciplina $disciplina)
    {
        return true;
    }
}
