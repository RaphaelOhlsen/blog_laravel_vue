@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
            <modallink tipo="button1" nome="meuModalTeste" titulo="Criar"></modallink>
            <tabela-lista
                :titulos="['#','Título','Descrição','Data']"
                :itens="{{$listaArtigos}}"
                ordem="desc" ordemcol="1"
                criar="#criar"
                detalhe="#detalhe"
                editar="#editar"
                deletar="#deletar"
                token="234236457878"
            >
            </tabela-lista>
        </painel>
    </pagina>

    <modal nome="meuModalTeste">
        <painel titulo="Adicionar">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
                <div class="form-group">
                    <label for="Titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>

    </modal>
@endsection