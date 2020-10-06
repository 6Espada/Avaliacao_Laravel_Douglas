@extends('layout.site')

@section('titulo', 'Contratos')

@section('conteudo')
<div class="container">
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Certidões</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('contratos.adicionar') }}">
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
                        <th scope="col">Tipo da Contrato</th>
                        <th scope="col">Nome do Envolvido 1</th>
                        <th scope="col">Nome do Envolvido 2</th>
                        <th scope="col">Data do Contrato</th>
                        <th scope="col">Valor do Contrato</th>
                        <th scope="col">Nome do Tabelião</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->tipo_contrato }}</td>
                            <td>{{ $item->nm_envolvido1 }}</td>
                            <td>{{ $item->nm_envolvido2 }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->data_contrato)->format('d/m/Y') }}</td>
                            <td>{{ $item->vl_contrato }}</td>
                            <td>{{ $item->nm_tabeliao }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{route('contratos.editar', $item->id)}}">
                                    Editar</a>
                            </td>
                            <td>
                                <form action="{{route('contratos.deletar', $item->id)}}" method="post"> 
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
