<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Tabeliao;

class ContratoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Contrato::class;
        $this->view = 'contratos';
    }

    public function adicionar()
    {
        $tabelioes = Tabeliao::all();
        return view("$this->view.adicionar", compact('tabelioes'));
    }

    public function editar($id)
    {
        $item = $this->classe::find($id);
        $tabelioes = Tabeliao::all();
        return view("$this->view.editar", compact('item','tabelioes'));
    }
}
