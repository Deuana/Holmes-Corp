<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Professor;

class ProfessorPolicy extends Policy
{
    public function update(User $user, Professor $professor)
    {
        // return $professor->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Professor $professor)
    {
        return true;
    }
}
