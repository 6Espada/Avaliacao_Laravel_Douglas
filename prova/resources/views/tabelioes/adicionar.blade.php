@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Tabelião</h3>
        <div class="row">
            <form action="{{ route('tabelioes.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('tabelioes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
