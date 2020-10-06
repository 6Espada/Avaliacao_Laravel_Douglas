<?php

namespace App\Http\Controllers;

use App\Tabeliao;

class TabeliaoController extends BaseController
{
   public function __construct()
   {
        $this->classe = Tabeliao::class;
        $this->view = 'tabelioes';
   }
}
