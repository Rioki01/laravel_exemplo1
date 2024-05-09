@extends('site.layouts.basico')
<!-- Utiliza o layout basico criado em layouts. -->
@section('titulo', 'Cadastro')
<!-- Passa o titulo como conteudo, via blade('') e controller($).-->

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Cadastro</h1>
        </div>

        <div class="informacao-pagina">
            <div class="login-principal">
                @component('site.layouts._components.form_cadastro', ['classe' => 'borda-preta'])
                <!-- Componente criado de forms na pasta _components -->
                <!-- Todos class no forms vao ser substituidas por 'borda-preta' -->
                <p>Realize aqui seu Cadastro!</p>
                @endcomponent
            </div>
        </div>
    </div>


    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection