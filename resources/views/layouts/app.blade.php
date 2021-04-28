<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    @if(Theme::get()=='qfq')
        <link href='https://fonts.googleapis.com/css?family=Jost:wght@400,700,900' rel='stylesheet' type='text/css'>
    @endif
    @if(Theme::get()=='colnum')
	    <link href='https://fonts.googleapis.com/css?family=Rubik:wght@300,400,600,700' rel='stylesheet' type='text/css'>
    @endif
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/' . Theme::get() . '.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body class="{{ 'theme-'. (Theme::get() ?? 'colnum') }}">
    @include('shared.navigation')
    @include('shared.header')
    <main class="content">
        @yield('content')
    </main>
    @include('footer')
</body>
</html>
