@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
        <tabela-lista :titulos="['teste','outros']"></tabela-lista>
        </painel>
    </pagina>

@endsection