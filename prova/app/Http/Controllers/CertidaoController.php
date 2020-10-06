<?php

namespace App\Http\Controllers;

use App\Certidao;
use App\Tabeliao;

class CertidaoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Certidao::class;
        $this->view = 'certidoes';
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
