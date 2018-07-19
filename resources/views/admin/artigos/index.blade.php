@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista
                :titulos="['#','Título','Descrição','Data']"
                :itens="[[1,'PHP OO','Curso de PHP OO','01/01/2018'],[2,'Vue JS','Curso de Vue JS','23/10/2017']]"

            >
            </tabela-lista>
        </painel>
    </pagina>

@endsection