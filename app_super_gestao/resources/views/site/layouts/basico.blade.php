<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Gestão - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>
<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>
</html>
<!-- :yield refere-se a um campo que retorna por parametro do controller,
exemplo, [titulo] no controller.-->
<!-- para inserir coisas como javascript ou imagens, utiliza o "asset" e o caminho do destino. -->
<!-- :include refere-se a forma de incluir partes de front-end, como topo, rodapé ou body. -->
<!-- o yield para o conteudo, é dinamico, pois permite cada pagina mostrar seu proprio conteudo -->



