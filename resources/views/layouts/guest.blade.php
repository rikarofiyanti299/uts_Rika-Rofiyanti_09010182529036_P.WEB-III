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
          style="background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 40%, #f9a8d4 80%, #f472b6 100%); 
                 min-height: 100vh; position: relative; overflow-x: hidden; margin: 0;">

        <div style="position: fixed; top: 10%; left: 6%; font-size: 3rem; pointer-events: none; z-index: 1;" class="float-icon sparkle">💖</div>
        <div style="position: fixed; top: 20%; right: 10%; font-size: 2.5rem; pointer-events: none; z-index: 1;" class="float-icon sparkle">🌸</div>
        <div style="position: fixed; bottom: 15%; left: 10%; font-size: 2.5rem; pointer-events: none; z-index: 1;" class="float-icon sparkle">✨</div>
        <div style="position: fixed; bottom: 25%; right: 6%; font-size: 2.8rem; pointer-events: none; z-index: 1;" class="float-icon sparkle">🎀</div>

        <div class="min-h-screen flex flex-col justify-center items-center px-4 py-10" style="position: relative; z-index: 10;">

            <div class="w-full shadow-2xl"
                 style="position: relative; z-index: 20;
                        max-width: 520px;
                        background: rgba(255, 255, 255, 0.98);
                        backdrop-filter: blur(10px);
                        border: 3px solid #fbcfe8;
                        border-radius: 2rem;
                        box-shadow: 0 25px 70px rgba(236, 72, 153, 0.4);
                        padding: 48px 40px;">

                {{-- Logo Kotak Gradient --}}
                <div class="flex justify-center mb-5">
                    <div style="width: 90px; height: 90px; border-radius: 24px; 
                                background: linear-gradient(135deg, #f9a8d4, #ec4899, #be185d);
                                box-shadow: 0 15px 40px rgba(236, 72, 153, 0.5);
                                display: flex; align-items: center; justify-content: center;
                                font-size: 3rem;"
                         class="float-icon">📚</div>
                </div>

                <h1 class="text-center font-extrabold mb-2 shimmer-text" style="font-size: 2.2rem; line-height: 1.2;">
                    Perpustakaan Pink
                </h1>
                <p class="text-center mb-8" style="color: #be185d; font-size: 0.95rem; line-height: 1.5;">
                    Jelajahi dunia pengetahuan, temukan buku favoritmu, dan mulai membaca. 🌸
                </p>

                {{ $slot }}
            </div>

            <p class="mt-6 text-center text-sm" style="color: #be185d;">
                © 2026 Perpustakaan Pink · Made with <span class="float-icon">💖</span>
            </p>
        </div>
    </body>
</html>