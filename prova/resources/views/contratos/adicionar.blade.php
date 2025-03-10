@extends('layout.site')

@section('titulo', 'Adicionar Contrato')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Contrato</h3>
        <div class="row">
            <form action="{{ route('contratos.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
