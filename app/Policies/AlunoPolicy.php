<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Aluno;

class AlunoPolicy extends Policy
{
    public function update(User $user, Aluno $aluno)
    {
        // return $aluno->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Aluno $aluno)
    {
        return true;
    }
}
