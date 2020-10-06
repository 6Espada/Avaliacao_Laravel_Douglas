<div class="form-group">
    <label for="tipo-certidao">Tipo da Certidão</label>
    <input type="text" class="form-control" id="tipo-certidao" name="tipo_certidao" value="{{$item->tipo_certidao ?? ''}}">
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
    <label for="data-certidao">Data da Certidão</label>
    <input type="date" class="form-control" id="data-certidao" name="data_certidao" value="{{$item->data_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="nm-tabeliao">Nome do Tabelião</label>
    <select id="nm-tabeliao" class="form-control" name="nm_tabeliao">
        @foreach ($tabelioes as $item)
            <option value="{{$item->nm_tabeliao?? ''}}">{{$item->nm_tabeliao?? ''}}</option> 
        @endforeach
    </select>
</div>