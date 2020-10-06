<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'tipo_contrato', 'nm_envolvido1', 'nm_envolvido2', 'data_contrato','vl_contrato', 'nm_tabeliao'
    ];
    
    protected $table = 'contrato';
}
