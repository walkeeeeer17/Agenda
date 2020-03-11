<?php

namespace App\models;

use dateUtils;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $fillable = ['id', 'nome', 'foto', 'numero', 'numero_trabalho', 'endereco'];

    public function search($filter)
    {
        $results = $this->where(function($query) use($filter)
        {
            if($filter)
            {
                $query->where('nome', 'LIKE', "%{$filter}%");
            }
        })->paginate();
        return $results;
    }
    public function dtCriacao()
    {
        return date("d/m/Y H:i:s", strtotime($this->created_at));
    }
}
