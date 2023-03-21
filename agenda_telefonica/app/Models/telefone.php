<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Resources\telefoneresource;
use App\Models\agenda_telefonica;

class telefone extends Model
{
    use HasFactory;

    protected $fillable = ['numero','telefones_agenda_id'];

    public function agendas()
    {
        return $this->belongsTo(agenda_telefonica::class);
    }
}
