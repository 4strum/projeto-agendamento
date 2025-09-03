<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{

    protected $table = 'agendamentos';
    protected $fillable = ['cliente_id', 'data_hora', 'descricao'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
