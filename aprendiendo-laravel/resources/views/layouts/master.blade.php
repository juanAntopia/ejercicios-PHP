<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título -  @yield('titulo')</title>
</head>
<body>

@section('header')
    <h1>Cabecera de la WEB (master)</h1>
@show

    <div class="container">
        @yield('content')
    </div>

@section('footer')
    <h1>Pie de página de la WEB (master)</h1>
@show
    
</body>
</html>