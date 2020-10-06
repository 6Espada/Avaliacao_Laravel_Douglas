<div class="form-group">
    <label for="tipo-contrato">Tipo da Contrato</label>
    <input type="text" class="form-control" id="tipo-contrato" name="tipo_contrato" value="{{$item->tipo_contrato ?? ''}}">
</div>
<div class="form-group">
    <label for="nm-envolvido1">Nome do Envolvido 1</label>
    <input type="text" class="form-control" id="nm-envolvido1" name="nm_envolvido1" value="{{$item->nm_envolvido1 ?? ''}}">
</div>
<div class="form-group">
    <label for="nm-envolvido2">Nome do Envolvido 2</label>
    <input type="text" class="form-control" id="nm-envolvido2" name="nm_envolvido2" value="{{$item->nm_envolvido2 ?? ''}}">
</div>
<div class="form-group">
    <label for="data-contrato">Data do Contrato</label>
    <input type="date" class="form-control" id="data-contrato" name="data_contrato" value="{{$item->data_contrato ?? ''}}">
</div>
<div class="form-group">
    <label for="vl-contrato">Valor do Contrato</label>
    <input type="text" class="form-control" id="vl-contrato" name="vl_contrato" value="{{$item->vl_contrato ?? ''}}">
</div>
<div class="form-group">
    <label for="nm-tabeliao">Nome do Tabelião</label>
    <select id="nm-tabeliao" class="form-control" name="nm_tabeliao">
        @foreach ($tabelioes as $item)
            <option value="{{$item->nm_tabeliao?? ''}}">{{$item->nm_tabeliao?? ''}}</option> 
        @endforeach
    </select>
</div>