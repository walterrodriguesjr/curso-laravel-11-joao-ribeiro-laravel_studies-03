<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
</head>
<body>
       
    @include('layouts.navbar')

    @yield('content')

    {{-- bootstrap --}}
    <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>

</body>
</html>