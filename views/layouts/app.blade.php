<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="@asset('images/favicon.png')">
    {{-- CSS Framework --}}
    <link href="@asset('css/tailwind.css')" rel="stylesheet">
    {{-- JS Framework --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>
  <body @unless(empty($body_class)) class="{{ $body_class }}" @endunless>
    @include('components.navbar')
    @include('components.header')
    @yield('main-content')
    @include('components.footer')
  </body>
</html>