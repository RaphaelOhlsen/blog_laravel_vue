@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
            <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#meuModalTeste">Large modal</button>
            <tabela-lista
                :titulos="['#','Título','Descrição','Data']"
                :itens="[['1','PHP OO','Curso de PHP OO','01/01/2018'],['2','Vue JS','Curso de Vue JS','23/10/2017']]"
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
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </painel>

    </modal>
@endsection