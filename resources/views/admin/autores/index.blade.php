@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        @if($errors->all())
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                @foreach($errors->all() as $key => $value)
                    <li><strong>{{$value}}</strong></li>
                @endforeach
            </div>
        @endif
        <painel titulo="Lista de Autores">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
            <tabela-lista
                :titulos="['#','Nome','E-mail']"
                :itens="{{json_encode($listaModelo)}}"
                ordem="desc" ordemcol="1"
                criar="#criar" detalhe="/admin/autores/" editar="/admin/autores/" token="{{ csrf_token() }}"
                modal="sim"
            >
            </tabela-lista>
            <div align="center">
                {{$listaModelo}}
            </div>
        </painel>
    </pagina>

    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formAdicionar" css="" action="{{route('autores.store')}}" method="post" enctype="" token="{{csrf_token()}}">
            <div class="form-group">
                <label for="nameAdd">Nome</label>
                <input type="text" class="form-control" id="nameAdd" name="name" placeholder="Nome" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="emailAdd">E-mail</label>
                <input type="email" class="form-control" id="emailAdd" name="email" placeholder="E-mail" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <select class="form-control" name="autor" id="autorAdd">
                    <option {{(old('autor') && old('autor') == 'N' ? 'selected' : '')}} value="N">Não</option>
                    <option {{(old('autor') && old('autor') == 'S' ? 'selected' : '')}} {{(!old('autor') ? 'selected' : '')}} value="S">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passwordAdd">Senha</label>
                <input type="password" class="form-control" id="passwordAdd" name="password" placeholder="Senha" value="{{old('password')}}">
            </div>
        </formulario>
        <span slot="botoes"> <button form="formAdicionar" class="btn btn-info">Adicionar</button></span>

    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario id="formEditar" css="" :action="'/admin/autores/' + $store.state.item.id" method="put" enctype="" token="{{csrf_token()}}">
            <div class="form-group">
                <label for="nameEdit">Nome</label>
                <input type="text" class="form-control" id="nameEdit" name="name" v-model="$store.state.item.name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="emailEdit">E-mail</label>
                <input type="email" class="form-control" id="emailEdit" name="email" v-model="$store.state.item.email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <select class="form-control" name="autor" id="autorEdit" v-model="$store.state.item.autor">
                    <option value="N">Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passwordEdit">Senha</label>
                <input type="password" class="form-control" id="passwordEdit" name="password">
            </div>
        </formulario>
        <span slot="botoes"><button form="formEditar" class="btn btn-info">Atualizar</button></span>
    </modal>

    <modal nome="detalhe" :titulo="$store.state.item.name">
        <p>@{{$store.state.item.email}}</p>
    </modal>
@endsection