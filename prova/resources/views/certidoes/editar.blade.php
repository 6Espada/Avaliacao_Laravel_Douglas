@extends('layout.site')

@section('titulo', 'Editar Certidão')


@section('conteudo')
    <div class="container">
        <h3>Editar Certidão</h3>
        <div class="row">
            <form action="{{route('certidoes.atualizar', $item->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('certidoes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()
