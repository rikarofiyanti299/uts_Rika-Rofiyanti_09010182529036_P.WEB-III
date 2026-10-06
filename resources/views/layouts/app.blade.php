<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Perpustakaan Pink') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" 
          style="background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 50%, #fbcfe8 100%); min-height: 100vh; margin: 0;">

        <div style="position: fixed; top: 10%; left: 5%; font-size: 2rem; opacity: 0.4; pointer-events: none; z-index: 1;" class="float-icon">💖</div>
        <div style="position: fixed; top: 30%; right: 8%; font-size: 1.5rem; opacity: 0.4; pointer-events: none; z-index: 1;" class="float-icon">🌸</div>
        <div style="position: fixed; bottom: 15%; left: 10%; font-size: 1.8rem; opacity: 0.4; pointer-events: none; z-index: 1;" class="float-icon">✨</div>
        <div style="position: fixed; bottom: 25%; right: 5%; font-size: 1.5rem; opacity: 0.4; pointer-events: none; z-index: 1;" class="float-icon">🎀</div>

        <div class="min-h-screen" style="position: relative; z-index: 5;">
            @include('layouts.navigation')

            @isset($header)
                <header class="shadow-lg" style="background: linear-gradient(135deg, #ec4899, #f472b6, #f9a8d4);">
                    <div style="max-width: 1280px; margin: 0 auto; padding: 24px 16px;">
                        <h2 class="font-bold text-2xl text-white leading-tight flex items-center gap-2" style="margin: 0;">
                            {{ $header }}
                        </h2>
                    </div>
                </header>
            @endisset

            <main>{{ $slot }}</main>
        </div>

        <footer style="text-align: center; padding: 24px 0; margin-top: 32px; color: #be185d;">
            <p class="text-sm font-semibold">
                Made with <span class="float-icon">💖</span> by Rika Rofiyanti
            </p>
        </footer>
    </body>
</html>