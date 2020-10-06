<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $fillable = [
        'tipo_certidao', 'nm_envolvido1', 'nm_envolvido2', 'data_certidao', 'nm_tabeliao'
    ];
    
    protected $table = 'certidao';
}
