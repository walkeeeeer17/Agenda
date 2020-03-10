<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $fillable = ['id', 'foto', 'nome', 'sobrenome', 'numero', 'numero_trabalho', 'endereco'];
}
