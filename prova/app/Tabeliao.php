<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    protected $fillable = [
        'nm_tabeliao'
    ];
    
    protected $table = 'tabeliao';
}
