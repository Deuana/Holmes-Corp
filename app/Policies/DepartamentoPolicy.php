<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Departamento;

class DepartamentoPolicy extends Policy
{
    public function update(User $user, Departamento $departamento)
    {
        // return $departamento->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Departamento $departamento)
    {
        return true;
    }
}
