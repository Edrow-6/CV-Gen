<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} • CV</title>

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- Favicon --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="@asset('assets/images/cv.png')">
    {{-- CSS Framework --}}
    <link href="@asset('css/tailwind.css')" rel="stylesheet">
    {{-- JS Framework --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>
  <body @unless(empty($body_class)) class="{{ $body_class }}" @endunless>
    {{-- @unless($body_class == 'home-page')
      @include('components.navbar')
    @endunless --}}
    @include('components.header')
    @yield('main-content')
  </body>
</html>