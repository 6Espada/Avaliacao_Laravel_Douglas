@extends('layout.site')

@section('titulo', 'Tabelioes')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabeliões</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('tabelioes.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome do tabelião</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->nm_tabeliao }}</td>
                            {{-- <td>{{ \Carbon\Carbon::parse($item->data_nascimento)->format('d/m/Y') }}</td> --}}
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('tabelioes.editar', $item->id)}}">
                                    Editar</a>
                            </td>
                            <td>
                                <form action="{{route('tabelioes.deletar', $item->id)}}" method="post"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
