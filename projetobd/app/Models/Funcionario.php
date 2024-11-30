<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cargos;
use App\Models\turno;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cpf', 'cargo_id', 'turno_id'];


    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }

    public function turno()
    {
        return $this->belongsTo(turno::class);
    }
}
