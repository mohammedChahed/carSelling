@props(['bodyClass' => '' , 'title' => ''])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>{{ $title }} {{ config('app.name' , 'laravel') }} </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body  @if( $bodyClass ) class=" {{ $bodyClass }} " @endif> 
    {{ $slot }}
    <script defer src="{{ asset('js/script.js') }}"></script>
</body>
</html>