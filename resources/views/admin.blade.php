@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <pagina tamanho="10">
              <painel titulo="Dashboard">
                  <migalhas :lista="{{$listaMigalhas}}"></migalhas>
                  <div class="row">
                      <div class="col-md-4">
                          <caixa qtd="{{$totalArtigos}}" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                      </div>
                      <div class="col-md-4">
                          <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-stalker"></caixa>
                      </div>
                      <div class="col-md-4">
                          <caixa qtd="{{$totalAutores}}" titulo="Autores" url="{{route('autores.index')}}" cor="red" icone="ion ion-person"></caixa>
                      </div>
                      <div class="col-md-4">
                          <caixa qtd="{{$totalAdmin}}" titulo="Administardaores" url="{{route('adm.index')}}" cor="green" icone="ion ion-person"></caixa>
                      </div>
                  </div>
              </painel>
          </pagina>
      </div>
  </div>
@endsection
