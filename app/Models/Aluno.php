<?php

namespace App\Models;

class Aluno extends Model
{
    protected $fillable = ['nome', 'senha', 'email', 'matricula', 'curso_id', 'curso_id'];
}
