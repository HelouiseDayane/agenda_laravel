<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\telefone;
use App\Resources\telefoneresource;

class agenda_telefonica extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'data_nasc', 'cpf'];


    public function agendas()
    {
        return $this->hasMany(telefone::class);
    }
}
