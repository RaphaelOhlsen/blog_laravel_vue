@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
        <painel titulo="Artigos">
            <div class="row">
                <artigocard
                titulo="Titulo Teste"
                descricao="Teste de Descrição"
                link="#"
                imagem="https://coletiva.net/files/e4da3b7fbbce2345d7772b0674a318d5/midia_foto/20170713/118815-maior_artigo_jul17.jpg"
                data="12/11/2017"
                autor="Raphael"
                sm="6"
                md="4">
                </artigocard>
            </div>
        </painel>


    </pagina>

@endsection
